<?php require 'controller/check forget password.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/login_Style.css">
</head>

<body>
    <div class="password_wraper">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="header">
                <label>Forget password</label>
                <hr class="hr_tag">
            </div>
            <div>
                <div class="Content">
                    <input type="text" placeholder="Enter Email" name="email" class="input_holder">
                    <span class="error">
                        <?php echo $emailerr; ?>
                    </span><br>
                </div>
                <div class="submit_content">
                    <input type="submit" name="submit" value="Verify" class="submit_button">
                </div>
                <?php echo $massage; ?>
            </div>
        </form>
    </div>

<?php require 'fotter/Footer.php'; ?>