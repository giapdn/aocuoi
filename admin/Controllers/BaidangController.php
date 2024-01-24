<?php
require_once "Models/BaiDang.php";
require_once "Models/KhachHang.php";
require_once 'Libs/PhpSpreadSheet/vendor/autoload.php';
require_once "Libs/PhpSpreadSheet/Query.php";

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class BaiDangController
{

    protected $use;
    protected $baidang;
    protected $spreadsheet;
    protected $query;

    public function __construct()
    {
        $this->use = new KhachHang();
        $this->baidang = new BaiDang();
        $this->spreadsheet = new Spreadsheet();
        $this->query = new Query();
    }
    //bài đăng
    public function ListBaidang()
    {
        $baidang = $this->baidang->AllBaidang();
        include_once "Views/BaiDang/list.php";
    }
    public function AddBaidang()
    {
        $listusername = $this->use->getAllusername();
        if (isset($_POST['them'])) {
            $tieu_de = $_POST['tieu_de'];
            $noi_dung = $_POST['noi_dung'];
            $path = $_FILES['path']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["path"]["name"]);
            move_uploaded_file($_FILES["path"]["tmp_name"], $target_file);
            $username = $_POST['username'];
            $check = $this->baidang->thembaiviet($tieu_de, $noi_dung, $path, $username);
            if (!$check) {
                echo '<script>alert("them thành công")</script>';
                echo '<script>window.location.href="../admin/index.php?url=list-baiviet"</script>';
            }
        }
        include_once "Views/BaiDang/add.php";
    }
    public function deleteBaiViet()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            $this->baidang->xoaBaiViet($id);
            echo '<script>alert("Xóa thành công")</script>';
            echo '<script>window.location.href="../admin/index.php?url=list-baiviet"</script>';
        }
    }
    public function EditBaiViet()
    {
        $listusername = $this->use->getAllusername();
        if ($_GET["url"] == "sua-baiviet") {
            if (isset($_POST["id_bai_dang"])) {
                $id = $_POST['id_bai_dang'];
                $tieu_de = $_POST['tieu_de'];
                $noi_dung = $_POST['noi_dung'];
                $path = $_FILES['path']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["path"]["name"]);
                move_uploaded_file($_FILES["path"]["tmp_name"], $target_file);
                $username = $_POST['username'];
                $check = $this->baidang->suaBaiViet($id, $tieu_de, $noi_dung, $path, $username);
                if (!$check) {
                    echo '<script>alert("sửa thành công")</script>';
                    echo '<script>window.location.href="../admin/index.php?url=list-baiviet"</script>';
                }
            } else {
                $id = $_GET['id'];
                $hienThiBaiViet = $this->baidang->hienthi($id);
                require_once "Views/BaiDang/sua.php";
            }
        }
    }

    public function ExportBaiViet()
    {
        $sheet = $this->spreadsheet->getActiveSheet();
        // Lấy dữ liệu
        $data = $this->query->DanhSach("tb_baidang", ["id_bai_dang", "tieu_de", "noi_dung", "ngay_dang", "path", "username", "trangthai"]);

        // Tạo tiêu đề
        $sheet
            ->setCellValue('A1', 'STT')
            ->setCellValue('B1', 'ID')
            ->setCellValue('C1', 'Tiêu đề')
            ->setCellValue('D1', 'Nội dung')
            ->setCellValue('E1', 'Ngày đăng')
            ->setCellValue('F1', 'Path')
            ->setCellValue('G1', 'Người đăng')
            ->setCellValue('H1', 'trạng thái');

        // Ghi dữ liệu
        $rowCount = 2;
        foreach ($data as $key => $value) {
            $sheet->setCellValue('A' . $rowCount, $rowCount - 1);
            $sheet->setCellValue('B' . $rowCount, $value->id_bai_dang);
            $sheet->setCellValue('C' . $rowCount, $value->tieu_de);
            $sheet->setCellValue('D' . $rowCount, $value->noi_dung);
            $sheet->setCellValue('E' . $rowCount, $value->ngay_dang);
            $sheet->setCellValue('F' . $rowCount, $value->path);
            $sheet->setCellValue('G' . $rowCount, $value->username);
            $sheet->setCellValue('H' . $rowCount, $value->trangthai);
            $rowCount++;
        }

        // Xuất file
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($this->spreadsheet);
        $writer->setOffice2003Compatibility(true);
        $filename = time() . ".xlsx";
        $writer->save($filename);
        echo "<script>window.location.href='$filename'</script>";
    }

    public function ImportBaiViet()
    {
        if ($_FILES["file"]["error"] > 0) {
            echo '<h1 style="text-align:center;">Chưa chọn file</h1>';
        } else {
            $inputFileName = 'file.xlsx';
            move_uploaded_file($_FILES["file"]["tmp_name"],  $inputFileName);
            $spreadsheet = IOFactory::load($inputFileName);

            foreach ($spreadsheet->getSheetNames() as $sheetName) {
                $sheetData = $spreadsheet->getSheetByName($sheetName)->toArray(null, true, true, true);
                $this->importSheetData($sheetData);
            }

            unlink('file.xlsx');
            echo "<script>window.location.href='?url=list-baiviet'</script>";
        }
    }

    private function importSheetData($sheetData)
    {
        $arrayCount = count($sheetData);

        for ($i = 2; $i <= $arrayCount; $i++) {
            $tieu_de = isset($sheetData[$i]["C"]) ? trim($sheetData[$i]["C"]) : null;
            $noi_dung = isset($sheetData[$i]["D"]) ? trim($sheetData[$i]["D"]) : null;
            $ngay_dang = isset($sheetData[$i]["E"]) ? trim($sheetData[$i]["E"]) : null;
            $path = isset($sheetData[$i]["F"]) ? trim($sheetData[$i]["F"]) : null;
            $username = isset($sheetData[$i]["G"]) ? trim($sheetData[$i]["G"]) : null;
            $trangthai = isset($sheetData[$i]["H"]) ? trim($sheetData[$i]["H"]) : null;

            if ($tieu_de !== null) {
                $this->query->ThemMoi(
                    "tb_baidang",
                    [
                        "tieu_de",
                        "noi_dung",
                        "ngay_dang",
                        "path",
                        "username",
                        "trangthai"
                    ],
                    [
                        "tieu_de" => $tieu_de,
                        "noi_dung" => $noi_dung,
                        "ngay_dang" => $ngay_dang,
                        "path" => $path,
                        "username" => $username,
                        "trangthai" => $trangthai
                    ]
                );
            }
        }
    }

    // public function search(){
    //     if (isset($_POST['btn'])) {
    //         $tieu_de = isset($_POST['noidung']) ? $_POST['noidung'] : '';
    //         $ketqua =$this->baidang-> timkiem($tieu_de);
    //         if ($ketqua) {
    //             foreach ($ketqua as $baidang) {
    //                 echo $baidang['tieu_de'] . '<br>';
    //             }
    //         } else {
    //             echo 'Không tìm thấy kết quả nào.';
    //         }
    //     }
    // }
}
