<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
	.right.a {
		
		}
	</style>
</head>
<body>
	<div class="right"> 
		<center>
			<a href="../Registratioform/store.php">Registratio form</a>
		</center>
	<div> 
	<?php 

		$Usernameerr = $passworderr = "" ;
    	$password = $Username =  "";

    	if ($_SERVER["REQUEST_METHOD"] == "POST")
	    {
	    	if(empty($_POST["User_name"]))
    		{
    		$Usernameerr = "*Insert Username";
    		} 
    		else
    			{
    		$Username = ($_POST["User_name"]);
    		if (preg_match('/^[a-zA-Z0-9]$/', $Username)) 
    		{
    			$Usernameerr = "*Invalid Input";
    		}
    		elseif (str_word_count($Username)<2) 
    		{
    			$Usernameerr = "*Minimum Two Characters";
    		}
		    	
			}

			if(empty($_POST["password"]))
    		{
    		$passworderr = "*Insert password";
    		} 
    		else
    		{
    			$password = ($_POST["password"]);
    			if(strlen($password)<8) 
    			{
           		 $passworderr = "Your Password Must Contain At Least 8 Characters!";
       			}
       			elseif (!preg_match("/[@,#,$,%]/",$password)) 
       			{
       				$passworderr = "*Minimum One Special Character";
       				
       			}
    		}



		}


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