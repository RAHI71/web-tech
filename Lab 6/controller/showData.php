<?php 
require 'model/model.php';
$data=showuser($_SESSION['user_name']);

$name = $data["name"];
$email = $data["email"];
$gender = $data["gender"];
$dob = $data["dob"];
$password = $data["password"];
?>