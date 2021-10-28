<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css2/style.css">
	<style>
	.right.a {
		
		}
	</style>
</head>
<body>
	<div class="right"> 
		<center>
			<a href="store.php">Registratio form</a>
		</center>
	<div> 
		<div class="left"> 
		<center>
			<a href="bookInformation.php">Sell information</a>
		</center>
	<div> 

	   <?php
 include('../controller/loginvalidation.php')
	   ?>

		

	
	<form method="post" class="wraper" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<div class="header">
      <label>LOGIN</label>
      <hr class="hr_tag">
    </div>
		<div>
			<div class="Content">
			<input type="text" placeholder="Enter User Name" name="User_name" class="input_holder" >
				<span class="error"><?php echo $Usernameerr;?></span>
			</div>

			<div class="Content">
			<input type="password" placeholder="Enter Password" name="password" class="input_holder">
				<span class="error"><?php echo $passworderr;?></span>
			</div>

      <div class="checker_content">
        <input type="checkbox" name="Rember Me"><span>Rember Me</span>
      </div>
			<div class="submit_content">
			<input type="submit" name="submit" value="Login" class="submit_button">
		</div>
    <div class="link_text">
     <span>Dont have account?</span><a href="#" class="forget_password">Sign Up</a>
    </div>
    <div class="link_text">
     <a href="#" class="forget_password">Forget password?</a>
		</div>

</form>

</body>
</html>