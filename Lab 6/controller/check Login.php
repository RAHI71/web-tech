

	<?php 


		$Usernameerr = $passworderr = "" ;
    	$password = $Username =  "";
if (isset($_POST['user_name']) && !$_POST['user_name'] == "" && !$_POST['password'] == "") 
      {
         require 'controller/checkloginData.php';
        if ($_POST['user_name']==$Username && $_POST['password']==$password) 
        {
          $_SESSION['user_name'] = $Username;
          $_SESSION['password'] = $password;
          if(isset($_POST['remember']))
          {
            setcookie('user_name', $Username, time()+3600);
            setcookie('password', $_POST['password'], time()+3600);
          }
          else{
    setcookie('user_name',"");
    setcookie('password',"");
    echo "Cookie not set";
  }
          header("location:Public.php");
        }
        else
        {
          echo "Username or password is invalid";
        }
      }
    	if ($_SERVER["REQUEST_METHOD"] == "POST")
	    {
	    	if(empty($_POST["user_name"]))
    		{
    		$Usernameerr = "*Insert Username";
    		} 
    		else
    			{
    		$Username = ($_POST["user_name"]);
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
       			elseif (!preg_match("/[!,@,#,$,%]/",$password)) 
       			{
       				$passworderr = "*Minimum One Special Character";
       				
       			}
    		}


		}


	 ?>
 
		
