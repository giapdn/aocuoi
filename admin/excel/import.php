<?php
	#Librady
	require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\IOFactory;
    require_once "Query.php";
    $query = new Query();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Import excel</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<p>File excel model</p>
		<input required name="file" type="file" /><br>

		<button type="submit" class="submit" name="import">Import</button>
	</form>
	<?php
	    if(isset($_POST["import"]))
	    {
	        if ($_FILES["file"]["error"] > 0) 
	        {
	        	echo '<h1 style="text-align:center;">Chưa chọn file</h1>';
	        }
	        else
	        {
	            $inputFileName ='file.xlsx';
	            move_uploaded_file($_FILES["file"]["tmp_name"],  $inputFileName);
	            $spreadsheet = IOFactory::load($inputFileName);
	            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
	            $arrayCount = count($sheetData);
	            
	            for($i = 2; $i <= $arrayCount; $i++)
	            {
	            	$ten = trim($sheetData[$i]["C"]);
	            	$ngaydang = trim($sheetData[$i]["D"]);
	            	$nguoi = trim($sheetData[$i]["E"]);
	            	$query->ThemMoi("import", ["ten", "ngay", "nguoi"], ["ten" => $ten, "ngay" => $ngaydang, "nguoi" => $nguoi]);
	            }
	            unlink('file.xlsx');
	        }
	    }
	?>
</body>
</html>