<html>
	<head>
		<title>HTTP File Upload Variables</title>
		<meta charset="UTF-8">
		<meta name="description" content="Show all attributes of $_FILES when uploading a file on a different page">
		<meta name="keywords" content="$_FILES">
		<meta name="author" content="Jorge Luis Aguirre Martínez">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
</html>

<?php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Check if file was uploaded without errors
	if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
		
		$file_name	 = $_FILES["photo"]["name"];
		$file_type	 = $_FILES["photo"]["type"];
		$file_size	 = $_FILES["photo"]["size"];
		$file_tmp_name = $_FILES["photo"]["tmp_name"];
		$file_error = $_FILES["photo"]["error"];
		
		echo "<div style='text-align: center; background: #4CB974;
		padding: 30px 0 10px 0; font-size: 20px; color: #fff'>
		File Name: " . $file_name . "</div>";
		
		echo "<div style='text-align: center; background: #4CB974;
		padding: 10px; font-size: 20px; color: #fff'>
		File Type: " . $file_type . "</div>";
		
		echo "<div style='text-align: center; background: #4CB974;
		padding: 10px; font-size: 20px; color: #fff'>
		File Size: " . $file_size . "</div>";
		
		echo "<div style='text-align: center; background: #4CB974;
		padding: 10px; font-size: 20px; color: #fff'>
		File Error: " . $file_error . "</div>";
		
		echo "<div style='text-align: center; background: #4CB974;
		padding: 10px; font-size: 20px; color: #fff'>
		File Temporary Name: " . $file_tmp_name . "</div>";

	} else {
		echo "<p>File not selected or with errors...</p>";
	}
} else {
	echo "<p>The form not was submitted...</p>";
}

// Show a link to back
?>
<?php ?>
	<div style='text-align: center; padding: 10px; font-size: 20px;'>
		<a href="./index.php" title="return">Back</a>
	</div>
<?php
?>