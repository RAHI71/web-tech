
<?php 

session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
	require 'head/Top2.php';}
else
{
  header("location:login.php");
} 
require 'controller/showData.php';


?> 

