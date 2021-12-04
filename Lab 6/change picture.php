<?php

require 'controller/check change picture.php';
require 'change profile picture/upload.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>image to upload</title>

    <link rel="stylesheet" type="text/css" href="Change profile picture/css/style.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <div class="wraper">

            <div class="header">
                <label>CHANGE PICTURE </label>
                <hr class="header_hr_tag">
            </div>
            <div class="Content">
                <img class="img_design" src="uploads/<?php echo (isset($_SESSION['pic'])) ? $_SESSION['pic'] : "main.png"; ?>" alt="Profile Picture">
            </div>
            <div class="Content_file">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <hr class="hr_tag">
            </div>

            <div class="Content_file">
                <input type="submit" value="Upload Image" name="submit">
            </div>

        </div>
    </form>

<?php require 'fotter/Footer.php'; ?>