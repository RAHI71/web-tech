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
