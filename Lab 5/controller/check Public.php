
<?php 

session_start();

if (isset($_SESSION['user_name']))
{
	require 'head/Top1.php';
	require 'head/Top2.php';

}
else
{
	require 'head/Top.php';
}


?>

