<?php  
require_once '../model/model.php';


if (isset($_POST['saveBook'])) 
{
	$data['book_name'] = $_POST['book_name'];
	$data['author_name'] = $_POST['author_name'];
	$data['book_price'] = $_POST['book_price'];
	$data['book_profit'] = $_POST['book_profit'];
	
  if (addBook($data)) 
  {
  	echo 'Successfully added!!';
  	echo '<a href="../Book information.php">Go Book information</a>';
  }
} 
else 
{
	echo 'You are not allowed to access this page.';
}
?>