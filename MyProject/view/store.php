<!DOCTYPE html>
<html>
<head>
	<title>From</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="right">
		<center>
			<a href="Login.php">Login form</a>
		</center>
	<div> 
	
	<?php

	$nameerr = $emailerr = $gendererr = $doberr =$Usernameerr = $passworderr= $rpassworderr="";
	$name = $email = $gender = $dob = $password = $Username = $rpassword= "";
	$flag=1; 
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	  if (empty($_POST["name"])) 
	  {
	    $nameerr = "Name is required";
	    $flag=0;
	  } 
	  else 
	  {
	    $name = ($_POST["name"]);
	  
	    if (!preg_match("/^[a-zA-Z-' ]*$/",$name) ) 
	    {
	      $nameerr = "Period & Dash Allowed";
	      $flag=0;
	    }
	    elseif(str_word_count($name)<2)
	    {
	    	 $nameerr = "Contains At Least Two Words";
	    	 $flag=0;
	    }
	  }

	  if (empty($_POST["email"])) 
	  {
	    $emailerr = "Email is required";
	    $flag=0;
	  } 
	  else 
	  {
	    $email = ($_POST["email"]);
	   
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	     {
	      $emailErr = "Invalid email format";
	      $flag=0;
	     }
	  }
	  if(empty($_POST["User_name"]))
    		{
    		$Usernameerr = "*Insert Username";
    		$flag=0;
    		} 
    		else
    			{
    		$Username = ($_POST["User_name"]);
    		if (preg_match('/^[a-zA-Z0-9]$/', $Username)) 
    		{
    			$Usernameerr = "*Invalid Input";
    			$flag=0;
    		}
    		elseif (str_word_count($Username)<2) 
    		{
    			$Usernameerr = "*Minimum Two Characters";
    			$flag=0;
    		}
		    	
			}

			if(empty($_POST["password"]))
    		{
    		$passworderr = "*Insert password";
    		$flag=0;
    		} 
    		else
    		{
    			$password = ($_POST["password"]);
    			if(strlen($password)<8) 
    			{
           		 $passworderr = "Your Password Must Contain At Least 8 Characters!";
           		 $flag=0;
       			}
       			elseif (!preg_match("/[@,#,$,%]/",$password)) 
       			{
       				$passworderr = "*Minimum One Special Character";
       				$flag=0;
       				
       			}
    		}
    		if (empty($_POST["rpassword"]))
    		{
    			$rpassworderr = "*Retype Password";
    			$flag=0;
    		} 
    		else
    			{
    				$rpassword = ($_POST["rpassword"]);
    				if (strcmp($password , $rpassword) == 1) 
    				{
    					$rpassworderr = "*Password not match";
    					$flag=0;
    				}
    			}

	  if (empty($_POST["dob"])) 
		  {
		    $doberr = "Date Of Birth Is Required";
		    $flag=0;
		  } 
		  else 
		  {
		    $dob = ($_POST["dob"]);
		  }

	  if (empty($_POST["gender"])) 
	  {
	    $gendererr = "Gender is required";
	    $flag=0;
	  } 
	  else 
	  {
	    $gender = ($_POST["gender"]);
	  }

	if ($flag==1) 
	  {
		
	  if(isset($_POST["submit"]))  
    {
      if(file_exists('data.json'))  
      {  
        $current_data = file_get_contents('Data.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
        'name'            =>     $_POST['name'],
        'email'           =>     $_POST['email'],
        'User_name'       =>     $_POST['User_name'],
        'password'        =>     $_POST['password'],
        'gender'          =>     $_POST["gender"],  
        'dob'             =>     $_POST["dob"]);  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('Data.json', $final_data))  
        {  
          $massage = "File Appended Success fully";  
        } 
      } 
      else  
      {  
        $error = 'JSON File not exits';  
      }
    }  
	

	}
}
	


?>

	<div class="header">
		<h1>Registration</h1>
	</div>

	
	<div class="reg_box">
		<form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="wraper">
				<div class="first_inputs">
		
		<div class="content1" >
			<input type="text" name="name" class="input" placeholder="Enter Your Name" value="<?php echo $name;?>"><span class="error"> <?php echo $nameerr;?></span><br>
			
		</div>

		
		<div class="content1">
			<input type="text" name="email" placeholder="Enter Your Email" class="input" value="<?php echo $email;?>">
		<span class="error">
	 		<?php echo $emailerr;?>
	 	</span><br>
		</div>

		<div class="content1">
			<input type="text" placeholder="Enter User Name" name="User_name" class="input" >
				<span class="error"><?php echo $Usernameerr;?></span>
			</div>
			<hr class="hr_tag">
			</div>

			<div class="second_inputs">
			<div class="content">
			<input type="password" placeholder="Enter Password" name="password" class="input">
				<span class="error"><?php echo $passworderr;?></span>
			</div>
			
			<div class="content">
				<input type="password" class="input" placeholder="Confirm Password" name="rpassword">
				<span class="error"><?php echo $rpassworderr;?></span>
			</div>
			<hr class="hr_tag">
		</div>
		<div class="content_gender">
			<label class="label">Gender</label><br>
			<div class="gender_input">
			 <input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<span class="error">
	 		<?php echo $gendererr;?>
	 	</span>
	 	</div><br>
		</div>

		<div class="content">
			<label class="label">Date Of Birth</label><br>
			 <input type="date" name="dob" class="input_dob" value="<?php echo $dob;?>">
      <span class="error"><?php echo $doberr;?></span><br>
		</div>


		<div class="submit_content">
		
			<input type="submit" name="submit" value="Submit" class="submit_button">
			<input type="submit" name="submit" value="Reset" class="submit_button">
		</div>

		</div>
	</form>

	</div>




</body>
</html>