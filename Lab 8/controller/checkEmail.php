<?php 
require 'model/model.php';
$data=searchData($_POST['email']);
if($data!= null)
{ 
	if($_POST['email']==$row["email"])
	{

		$email = $row["email"];
  		return;

	}
}

?>