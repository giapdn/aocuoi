<?php
require_once "Models/Product.php";
require_once "Models/Category.php";
require_once 'Libs/PhpSpreadSheet/vendor/autoload.php';
require_once "Libs/PhpSpreadSheet/Query.php";

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class ProductController
{

    protected $product;
    protected $danhmuc;
    protected $spreadsheet;
    protected $query;

    public function __construct()
    {
        $this->product = new Product();
        $this->danhmuc = new Category();
        $this->spreadsheet = new Spreadsheet();
        $this->query = new Query();
    }

    public function ListProduct()
    {
        $sanpham = $this->product->allProduct();
        include_once "Views/Product/list.php";
    }
    public function DeleteProduct()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            $this->product->xoaProduct($id);
            echo '<script>alert("Xóa thành công")</script>';
            echo '<script>window.location.href="../admin/index.php?url=list-product"</script>';
        }
    }
    public function AddProduct()
    {
        $id_dm = $this->danhmuc->AllCategory();
        if (isset($_POST['them'])) {
            $ten_san_pham = $_POST['ten_san_pham'];
            $gia_san_pham = $_POST['gia_san_pham'];
            $img_path_default = $_FILES['img_path_default']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["img_path_default"]["name"]);
            move_uploaded_file($_FILES["img_path_default"]["tmp_name"], $target_file);
            $mo_ta_san_pham = $_POST['mo_ta_san_pham'];
            $ma_san_pham = $_POST['ma_san_pham'];
            $id_danh_muc = $_POST['id_danh_muc'];
            $check = $this->product->themProduct($ten_san_pham, $gia_san_pham, $img_path_default, $mo_ta_san_pham, $ma_san_pham, $id_danh_muc);
            if (!$check) {
                echo '<script>alert("thêm thành công")</script>';
                echo '<script>window.location.href="../admin/index.php?url=list-product"</script>';
            }
        }
        include_once "Views/Product/add.php";
    }
    public function EditProduct()
    {
        $danhmuc = $this->danhmuc->AllCategory();
        if ($_GET["url"] == "sua-product") {
            if (isset($_POST["id_san_pham"])) {
                $id_san_pham = $_POST['id_san_pham'];
                $ten_san_pham = $_POST['ten_san_pham'];
                $gia_san_pham = $_POST['gia_san_pham'];
                $img_path_default = $_FILES['img_path_default']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["img_path_default"]["name"]);
                $mo_ta_san_pham = $_POST['mo_ta_san_pham'];
                $ma_san_pham = $_POST['ma_san_pham'];
                $id_danh_muc = $_POST['id_danh_muc'];

                    if (!empty($img_path_default )) {
                        // Kiểm tra và tạo thư mục lưu trữ nếu chưa tồn tại
                        if (!is_dir($target_dir)) {
                            mkdir($target_dir, 0755, true);
                        }
                        // Kiểm tra hình ảnh có hợp lệ không
                        $check = getimagesize($_FILES['img_path_default']['tmp_name']);
                        if ($check !== false) {
                            if (move_uploaded_file($_FILES['img_path_default']['tmp_name'], $target_file)) {
                                $this->product-> suaProduct($id_san_pham,$ten_san_pham,$gia_san_pham,$img_path_default,$mo_ta_san_pham,$ma_san_pham,$id_danh_muc);
                                echo '<script>alert("sửa thành công")</script>';
                                echo '<script>window.location.href="../admin/index.php?url=list-product"</script>';            
                            } else {
                                die("OOP !");
                            }
                        } else {
                            $this->product->suaProduct2($id_san_pham,$ten_san_pham,$gia_san_pham,$mo_ta_san_pham,$ma_san_pham,$id_danh_muc);
                            echo '<script>alert("sửa thành công")</script>';
                            echo '<script>window.location.href="../admin/index.php?url=list-product"</script>';            
                        }
                    } else {
                        $this->product->suaProduct2($id_san_pham,$ten_san_pham,$gia_san_pham,$mo_ta_san_pham,$ma_san_pham,$id_danh_muc);
                        echo '<script>alert("sửa thành công")</script>';
                        echo '<script>window.location.href="../admin/index.php?url=list-product"</script>';            
                    }
            }else{

                $id_san_pham = $_GET['id'];
                $hienThiSanPham = $this->product->hienthi($id_san_pham);
                require_once "Views/Product/edit.php";
            }
        }
    }

    //Excel
    public function ListExport()
    {
        $sheet = $this->spreadsheet->getActiveSheet();
        // Lấy dữ liệu
        $data = $this->query->DanhSach("tb_sanpham", ["id_san_pham", "ten_san_pham", "gia_san_pham", "img_path_default", "mo_ta_san_pham", "ma_san_pham", "id_danh_muc", "so_luong", "toption", "khuyen_mai"]);

        // Tạo tiêu đề
        $sheet
            ->setCellValue('A1', 'STT')
            ->setCellValue('B1', 'ID')
            ->setCellValue('C1', 'Tên')
            ->setCellValue('D1', 'Giá')
            ->setCellValue('E1', 'Path')
            ->setCellValue('F1', 'Mô tả')
            ->setCellValue('G1', 'Mã')
            ->setCellValue('H1', 'Danh mục')
            ->setCellValue('I1', 'Số lượng')
            ->setCellValue('J1', 'Trạng thái')
            ->setCellValue('K1', 'Khuyến mãi');

        // Ghi dữ liệu
        $rowCount = 2;
        foreach ($data as $key => $value) {
            $sheet->setCellValue('A' . $rowCount, $rowCount - 1);
            $sheet->setCellValue('B' . $rowCount, $value->id_san_pham);
            $sheet->setCellValue('C' . $rowCount, $value->ten_san_pham);
            $sheet->setCellValue('D' . $rowCount, $value->gia_san_pham);
            $sheet->setCellValue('E' . $rowCount, $value->img_path_default);
            $sheet->setCellValue('F' . $rowCount, $value->mo_ta_san_pham);
            $sheet->setCellValue('G' . $rowCount, $value->ma_san_pham);
            $sheet->setCellValue('H' . $rowCount, $value->id_danh_muc);
            $sheet->setCellValue('I' . $rowCount, $value->so_luong);
            $sheet->setCellValue('J' . $rowCount, $value->toption);
            $sheet->setCellValue('K' . $rowCount, $value->khuyen_mai);
            $rowCount++;
        }

        // Xuất file
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($this->spreadsheet);
        $writer->setOffice2003Compatibility(true);
        $filename = time() . ".xlsx";
        $writer->save($filename);
        echo "<script>window.location.href='$filename'</script>";
        // echo "<script>window.location.href='?url=list-product'</script>";
    }

    public function ListImport()
    {
        if ($_FILES["excelFile"]["error"] > 0) {
            echo '<h1 style="text-align:center;">Chưa chọn file</h1>';
        } else {
            $inputFileName = 'file.xlsx';
            move_uploaded_file($_FILES["excelFile"]["tmp_name"],  $inputFileName);
            $spreadsheet = IOFactory::load($inputFileName);

            foreach ($spreadsheet->getSheetNames() as $sheetName) {
                $sheetData = $spreadsheet->getSheetByName($sheetName)->toArray(null, true, true, true);
                $this->importSheetData($sheetData);
            }

            unlink('file.xlsx');
            echo "<script>window.location.href='?url=list-product'</script>";
        }
    }

    private function importSheetData($sheetData)
    {
        $arrayCount = count($sheetData);

        for ($i = 2; $i <= $arrayCount; $i++) {
            $ten_san_pham = isset($sheetData[$i]["C"]) ? trim($sheetData[$i]["C"]) : null;
            $gia_san_pham = isset($sheetData[$i]["D"]) ? trim($sheetData[$i]["D"]) : null;
            $img_path_default = isset($sheetData[$i]["E"]) ? trim($sheetData[$i]["E"]) : null;
            $mo_ta_san_pham = isset($sheetData[$i]["F"]) ? trim($sheetData[$i]["F"]) : null;
            $ma_san_pham = isset($sheetData[$i]["G"]) ? trim($sheetData[$i]["G"]) : null;
            $id_danh_muc = isset($sheetData[$i]["H"]) ? trim($sheetData[$i]["H"]) : null;
            $so_luong = isset($sheetData[$i]["I"]) ? trim($sheetData[$i]["I"]) : null;
            $toption = isset($sheetData[$i]["J"]) ? trim($sheetData[$i]["J"]) : null;
            $khuyen_mai = isset($sheetData[$i]["K"]) ? trim($sheetData[$i]["K"]) : null;

            if ($ten_san_pham !== null) {
                $this->query->ThemMoi(
                    "tb_sanpham",
                    [
                        "ten_san_pham",
                        "gia_san_pham",
                        "img_path_default",
                        "mo_ta_san_pham",
                        "ma_san_pham",
                        "id_danh_muc",
                        "so_luong",
                        "toption",
                        "khuyen_mai"
                    ],
                    [
                        "ten_san_pham" => $ten_san_pham,
                        "gia_san_pham" => $gia_san_pham,
                        "img_path_default" => $img_path_default,
                        "mo_ta_san_pham" => $mo_ta_san_pham,
                        "ma_san_pham" => $ma_san_pham,
                        "id_danh_muc" => $id_danh_muc,
                        "so_luong" => $so_luong,
                        "toption" => $toption,
                        "khuyen_mai" => $khuyen_mai
                    ]
                );
            }
        }
    }


    // public function ListImport()
    // {
    //     if ($_FILES["excelFile"]["error"] > 0) {
    //         echo '<h1 style="text-align:center;">Chưa chọn file</h1>';
    //     } else {
    //         $inputFileName = 'file.xlsx';
    //         move_uploaded_file($_FILES["excelFile"]["tmp_name"],  $inputFileName);
    //         $spreadsheet = IOFactory::load($inputFileName);
    //         $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    //         $arrayCount = count($sheetData);

    //         for ($i = 2; $i <= $arrayCount; $i++) {
    //             $ten_san_pham = isset($sheetData[$i]["C"]) ? trim($sheetData[$i]["C"]) : null;
    //             $gia_san_pham = isset($sheetData[$i]["D"]) ? trim($sheetData[$i]["D"]) : null;
    //             $img_path_default = isset($sheetData[$i]["E"]) ? trim($sheetData[$i]["E"]) : null;
    //             $mo_ta_san_pham = isset($sheetData[$i]["F"]) ? trim($sheetData[$i]["F"]) : null;
    //             $ma_san_pham = isset($sheetData[$i]["G"]) ? trim($sheetData[$i]["G"]) : null;
    //             $id_danh_muc = isset($sheetData[$i]["H"]) ? trim($sheetData[$i]["H"]) : null;
    //             $so_luong = isset($sheetData[$i]["I"]) ? trim($sheetData[$i]["I"]) : null;
    //             $toption = isset($sheetData[$i]["J"]) ? trim($sheetData[$i]["J"]) : null;
    //             $khuyen_mai = isset($sheetData[$i]["K"]) ? trim($sheetData[$i]["K"]) : null;

    //             if ($ten_san_pham !== null) {
    //                 $this->query->ThemMoi(
    //                     "tb_sanpham",
    //                     [
    //                         "ten_san_pham",
    //                         "gia_san_pham",
    //                         "img_path_default",
    //                         "mo_ta_san_pham",
    //                         "ma_san_pham",
    //                         "id_danh_muc",
    //                         "so_luong",
    //                         "toption",
    //                         "khuyen_mai"
    //                     ],
    //                     [
    //                         "ten_san_pham" => $ten_san_pham,
    //                         "gia_san_pham" => $gia_san_pham,
    //                         "img_path_default" => $img_path_default,
    //                         "mo_ta_san_pham" => $mo_ta_san_pham,
    //                         "ma_san_pham" => $ma_san_pham,
    //                         "id_danh_muc" => $id_danh_muc,
    //                         "so_luong" => $so_luong,
    //                         "toption" => $toption,
    //                         "khuyen_mai" => $khuyen_mai
    //                     ]
    //                 );
    //             }
    //         }
    //         unlink('file.xlsx');
    //         echo "<script>window.location.href='?url=list-product'</script>";
    //     }
    // }
}
