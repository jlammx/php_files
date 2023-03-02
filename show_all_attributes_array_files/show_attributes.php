<?php
    // Show all attributes of $_FILES when uploading a file in the same page
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
?>

<head>
    <title>Show all attributes array $_FILES</title>
    <meta charset="UTF-8">
    <meta name="description" content="Show all attributes of $_FILES when uploading a file in the same page">
    <meta name="keywords" content="$_FILES">
    <meta name="author" content="JORGE LUIS AGUIRRE MARTINEZ">
    <meta name="publish_date" property="og:publish_date" content="2023-03-01T22:00:00-0600">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<!--Multipart/form-data ensures that form data is going to be encoded as MIME data-->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload File">
</form>

<div style='text-align: center; padding: 10px; font-size: 20px;'>
    <a href="../" title="return">Return to main page</a>
</div>