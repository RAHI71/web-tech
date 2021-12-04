<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    td{
            border: 1px solid black;
            
        }

  </style>
</head>
<body>
<?php  
session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 

if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $useres = showAllBooks();
}
?>

<form >
<table style="border: 1px solid black ;margin: auto;">
      
  <tr style="background-color:gray; color: white; ">
    <th>ID</th>
    <th>Book Name</th>
    <th>Author Nmae</th>
    <th>Book Price</th>

   
  </tr>
 <?php 
        foreach ($useres as $i => $usere): 
        
        ?>
<tr>
    <td><?php echo $usere['ID'] ?></td>
    <td><?php echo $usere['book_name'] ?></td>
    <td><?php echo $usere['author_name'] ?></td>
    <td><?php echo $usere['book_price'] ?></td>

    
  </tr>
 <?php  endforeach; ?>
    
</table>
<a style="margin: auto; text-decoration: none;" href="addbook.php">Add Book</a>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>