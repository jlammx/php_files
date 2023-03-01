<!DOCTYPE html>
<html>
	<head>
		<title>HTTP File Upload Variables</title>

		<meta charset="UTF-8">
		<meta name="description" content="Show the attributes of $_FILES when uploading a file on a different page">
		<meta name="keywords" content="$_FILES">
		<meta name="author" content="Jorge Luis Aguirre Martínez">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="../css/style2.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<!--Multipart/form-data ensures that form data is going to be encoded as MIME data-->
		<form action="file_upload_manager.php" method="post" enctype="multipart/form-data">
			<h2>Upload File</h2>
			<!-- Name of the input fields are going to be used in our php script, in this case the name is "photo"-->
			<input type="file" name="photo" id="fileSelect"><br><br>
			<input type="submit" name="submit" value="Upload"><br><br>
			<div> By J Lam MX</div>
			<div style='text-align: center; padding: 10px; font-size: 20px; background: #fff;'>
				<a href="../" title="return">Return to main page</a>
			</div>
		</form>
	</body>
</html>