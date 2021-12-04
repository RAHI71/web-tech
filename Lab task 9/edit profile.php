<?php

session_start();

if (isset($_SESSION['user_name'])) {
    require 'head/Top1.php';
    require 'head/Top2.php';
} else {
    header("location:login.php");
}

require 'controller/showData.php';
require 'controller/store_data.php';

?>

<div style="margin-left: 35%; margin-top: 10%;">
    <fieldset style="width: 450px;height: 230px;">

        <form method="post">
            <legend style="text-align: center; width: 100%;height: 30px;">PROFILE</legend>

            <label for="name">Name</label>
            <label>: <input type="text" name="name" size="30" value="<?php echo $name ?>"></input></label>
            <span class="error"> </span>
            <hr>

            <label for="email">Email</label>
            <label>: <input type="email" name="email" size="30" value="<?php echo $email ?>"></input><b> i </b></label>
            <span class="error"> </span>
            <hr>


            <label for="gender">Gender</label>
            <label>:
                <input type="radio" id="male" name="gender" value="<?php echo 'male' == $gender ? 'checked' : ""; ?>">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="<?php echo 'female' ==   $gender ? 'checked' : ""; ?>">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="<?php echo 'other' ==   $gender ? 'checked' : ""; ?>">
                <label for="other">Other </label>
            </label>
            <span class="error"> </span>
            <hr>

            <label for="dob">Date of Birthday</label>
            <label>:
                <input type="date" name="dob" value="<?php echo $dob ?>">
            </label>
            <span class="error"> </span>
            <hr>

            <input type="submit" name="updateUser" value="Submit">
        </form>
    </fieldset>
</div>

<?php require 'fotter/Footer.php'; ?>