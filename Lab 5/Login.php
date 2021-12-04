<?php
session_start();
if (isset($_SESSION['user_name'])) {
    header("location:public.php");
} else {
    require 'head/top.php';
}
require 'controller/check Login.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Form Validation using Javascript</title>
    <link rel="stylesheet" type="text/css" href="css/login_Style.css">
</head>

<body>

    <form class="wraper" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <div class="header">
            <label class="thick">Accountant Login</label>
            <hr class="hr_tag">
        </div>
        <div>
            <div class="Content">
                <input type="text" placeholder="Enter User Name" name="user_name" id="username" class="input_holder" value="<?php echo (isset($_COOKIE['user_name'])) ? $_COOKIE['user_name'] : ""; ?>">
                <span id="err_username" class="error"><?php echo $Usernameerr; ?></span>
            </div>

            <div class="Content">
                <input type="password" placeholder="Enter Password" name="password" id="password" class="input_holder" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ""; ?>">
                <span id="err_password" class="error"><?php echo $passworderr; ?></span>
            </div>

            <div class="checker_content">
                <input type="checkbox" name="remember" <?php echo isset($_COOKIE['user_name']) ? "checked" : ""; ?>><span>Rember Me</span>
            </div>
            <div class="submit_content">
                <input type="submit" name="login_submit" value="Login" id="login_btn" class="submit_button">
            </div>
            <div class="link_text">
                <span>Dont have account?</span><a href="registration.php" class="forget_password">Sign Up</a>
            </div>
            <div class="link_text">
                <a href="forget password.php" class="forget_password">Forget password?</a>
            </div>
        </div>
    </form>

    <script src="controller/form.js"></script>

<?php require 'fotter/Footer.php'; ?>