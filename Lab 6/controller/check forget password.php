
	<?php 

			session_start();

		{
			require 'head/Top.php';
		}

		$email="";
		$emailerr=$massage="";

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  require 'Controller/checkEmail.php';
  if (!empty($_POST["email"]) && $_POST['email']==$email) 
  {
    $massage ="<h1>We will sent you an Email</h1>";
  }
  else if (empty($_POST["email"])) 
  {
    $emailerr = "Email is required";
  }
  else 
  {
    $email = ($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailerr = "Invalid email format";
      $email="";
    }
    else
    {
      $emailerr ="Invalid Email";
      $email=""; 
    }
  }
}
	 ?>


