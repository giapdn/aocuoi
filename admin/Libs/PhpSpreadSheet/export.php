<?php 
	require 'vendor/autoload.php';
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	$spreadsheet = new Spreadsheet();
	$sheet = $spreadsheet->getActiveSheet();

	// Connect data
	require_once "Query.php";
	$query = new Query();
	
	if(isset($_POST['export']))
	{
		// Get list data
		$dataTin = $query->DanhSach("tin", ["id", "ten", "ngay", "nguoi"]);
	
		// Tạo tiêu đề
		$sheet
			->setCellValue('A1', 'STT')
			->setCellValue('B1', 'ID')
			->setCellValue('C1', 'Tên')
			->setCellValue('D1', 'Ngày đăng')
			->setCellValue('E1', 'Người đăng');
		
		// Ghi dữ liệu
		$rowCount = 2;
		foreach ($dataTin as $key => $value) 
		{
			$sheet->setCellValue('A'.$rowCount, $rowCount-1); 
			$sheet->setCellValue('B'.$rowCount, $value->id);
			$sheet->setCellValue('C'.$rowCount, $value->ten);
			$sheet->setCellValue('D'.$rowCount, $value->ngay);
			$sheet->setCellValue('E'.$rowCount, $value->nguoi);
			$rowCount++;
		}

		// Xuất file
		$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
		$writer->setOffice2003Compatibility(true);
		$filename=time().".xlsx";
		$writer->save($filename);
		header("location:".$filename);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Export excel</title>
</head>
<body>
	<form method="post">
		<input type="submit" name="export" value="Export" />
	</form>
</body>
</html>