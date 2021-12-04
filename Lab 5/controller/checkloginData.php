<?php 
require 'model/model.php';
$data=searchData($_POST['user_name']);
if($data!= null)
{
	$Username = $data["user_name"];
  	$password = $data["password"];

}
?>


