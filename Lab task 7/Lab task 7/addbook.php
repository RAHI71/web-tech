<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<style type="text/css">
  *
  {
    margin: 0;
    padding: 0;
  }
  .wraper{
    
    width: 13%;
    margin: auto;
    padding: auto;
    margin-top: 150px;
    transform: scale(1.5);
  }
  .text
  {
    text-align: center;
  }
  .content
  {
    width: 100%;
    margin: auto;

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

?>
<form action="controller/saveProduct.php" method="POST" enctype="multipart/form-data" style="width: 100%;">
  <div class="content">
 <fieldset style="" class="wraper">
  <legend class="text">ADD BOOK</legend>

  <label for="book_name">Book Name</label><br>
  <input type="text" id="book_name" name="book_name"><br>

  <label for="author_name">Author Name</label><br>
  <input type="text" id="author_name" name="author_name"><br>

  <label for="book_price">Price</label><br>
  <input type="text" id="book_price" name="book_price"><br>

  <label for="book_profit">Profit</label><br>
  <input type="text" id="book_profit" name="book_profit" value="0.20"><br>

  <hr>

  <input type="submit" name = "saveBook" value="Save" style="margin: auto; width: 100px; margin-left: 30px;">
</div>
 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>