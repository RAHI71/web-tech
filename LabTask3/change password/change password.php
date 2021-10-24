<!DOCTYPE html>
<html>
<head>
	<title>
		Change password
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php 
	$cpassworderr = $npassworderr = $rpassworderr = "";
	$cpassword = "12345678@";
	$npassword = $rpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
				if (empty($_POST["cpassword"]))
	    		{
	    			$npassworderr = "*Type Curent Password";
	    		}
	    		else
	    		{
	    			$cpassword = ($_POST["cpassword"]);
			    		if (strlen($cpassword)<8)
			    		{
			    			$cpassworderr = "*Minimum 8 Characters";
			    		
			    		}
			    		else if (!preg_match("/[@,#,$,%]/",$cpassword))
			    		{
			    			$cpassworderr = "*Minimum One Special Character";
			    		
			    		}
			    }
			  

			if (empty($_POST["npassword"]))
    		{
    			$npassworderr = "*Type New Password";
    		} 
            else
             {
    			$npassword = ($_POST["npassword"]);
    			if (strcmp($cpassword , $npassword) == 0 ) 
    			{
    				$npassworderr = "*Current & New Password Same";
    			}
    			else if (strlen($npassword)<8) 
    				{
    				$npassworderr = "*Minimum 8 Characters";
    				}
    			else if (!preg_match("/[@,#,$,%]/",$npassword))
    			{
    			$npassworderr = "*Minimum One Special Character";
    			
    			}
    		}

    		if (empty($_POST["rpassword"]))
    		{
    			$rpassworderr = "*Retype Password";
    		} 
    		else
    			{
    				$rpassword = ($_POST["rpassword"]);
    				if (strcmp($npassword , $rpassword) == 1) 
    				{
    					$rpassworderr = "*Password not match";
    				}
    			}


	}


 ?>


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<div class="wraper">

				<div class="header">
      <label>CHANGE PASSWORD</label>
      <hr class="hr_tag">
    </div>

			<div class="Content">
				<label>Current Password</label>
				<input type="password" name="cpassword" class="input_holder" value="<?php echo $cpassword;?>">	
				<span class="error"><?php echo $cpassworderr;?></span>
			</div>

			<div class="Content">
				<label>New Password</label>
				<input type="password"class="input_holder" name="npassword">
				<span class="error"><?php echo $npassworderr;?></span>
			</div>

			<div class="Content">
				<label>Confirm Password</label>
				<input type="password" class="input_holder" name="rpassword">
				<span class="error"><?php echo $rpassworderr;?></span>
			</div>

			<div class="submit_content">
			<input type="submit" name="submit" value="Change password" class="submit_button">
		</div>
		</div>
</form>
</body>
</html>