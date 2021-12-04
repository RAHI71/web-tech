<?php require 'controller/check view profile.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/view_profile_style.css">
</head>

<body>
    <div class="wraper" style="margin-top: 100px;">

        <div class="header">
            <label>PROFILE</label>
            <hr class="hr_tag">
        </div>

        <div class="details">

            <p>Name:<?php echo $name  ?></p>
            <hr>
            <p>Email:<?php echo $email  ?></p>
            <hr>
            <p>Gender:<?php echo $gender  ?></p>
            <hr>
            <p>DOB:<?php echo $dob  ?></p>
            <hr><br>
            <a href="Edit Profile.php" class="edit_profile">Edit Profile</a>
        </div>

        <div class="img">
            <img class="img_design" src="uploads/<?php echo (isset($_SESSION['pic'])) ? $_SESSION['pic'] : "main.png"; ?>" alt="Profile Picture"><br>
            <a class="edit_profile" href="Change picture.php">Change</a>
        </div>
    </div>

<?php require 'fotter/Footer.php'; ?>