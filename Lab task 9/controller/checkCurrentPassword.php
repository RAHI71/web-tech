<?php 
require 'model/model.php';
$data=showuser($_SESSION['user_name']);
$password = $data["password"];
?>