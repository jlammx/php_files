<?php
    // Check if the form was submitted
    if (isset($_POST["submit"])) {
        // Check if file was uploaded without errors
        if (is_array($_FILES) && $_FILES["myImage"]["error"] == 0) {

            // getimagesize()
            // Method that returns an array of image properties like width, height, bits, channels, image type and mime type.
            $image_properties = getimagesize($_FILES['myImage']['tmp_name']);

            // exif_read_data()
            // Method that returns more information than getimagesize() like image created date, last modified date, File name, size, orientation, resolution and etc
            $image_properties_exif = exif_read_data($_FILES['myImage']['tmp_name']);

            print "<PRE>";
            print "<h3>getimagesize()</h3>";
            print_r($image_properties);
            print "<h3>exif_read_data()</h3>";
            print_r($image_properties_exif);
            print "</PRE>";
        } else {
            print "<p>File not selected or with errors...</p>";
        }
    }
?>

<html>
    <head>
        <title>Getting Image Properties</title>
        <meta charset="UTF-8">
        <meta name="description" content="Examples using $_FILES">
        <meta name="keywords" content="PHP, $_FILES">
        <meta name="author" content="JORGE LUIS AGUIRRE MARTINEZ">
        <meta name="publish_date" property="og:publish_date" content="2023-03-01T22:00:00-0600">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <form name="frmImage" action="" method="post"enctype="multipart/form-data">
            <input type="file" name="myImage" accept="image/*"/> 
            <input type="submit" name="submit" value="Submit"/>
        </form>
        <div style='text-align: center; padding: 10px; font-size: 20px;'>
            <a href="../" title="return">Return to main page</a>
        </div>
    </body>
</html>