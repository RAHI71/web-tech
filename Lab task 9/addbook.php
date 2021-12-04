<?php
session_start();

require_once 'controller/saveProduct.php';

if (isset($_SESSION['user_name'])) {
    include_once 'head/Top1.php';
    include_once 'head/Top2.php';
} else {
    header("location:login.php");
}

?>

<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }

    .wraper {

        width: 13%;
        margin: auto;
        padding: auto;
        margin-top: 150px;
        transform: scale(1.5);
    }

    .text {
        text-align: center;
    }

    .content {
        width: 100%;
        margin: auto;

    }

    .error {
        color: red;
    }

    .success {
        color: green;
    }
</style>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="width: 100%;">
    <div class="content">
        <fieldset class="wraper">
            <legend class="text">ADD BOOK</legend>

            <label for="book_name">Book Name</label><br>
            <input type="text" id="book_name" name="book_name"><br>
            <span class="error"><?php echo $book_name_err; ?></span><br>

            <label for="author_name">Author Name</label><br>
            <input type="text" id="author_name" name="author_name"><br>
            <span class="error"><?php echo $authon_name_err; ?></span><br>

            <label for="book_price">Price</label><br>
            <input type="text" id="book_price" name="book_price"><br>
            <span class="error"><?php echo $book_price_err; ?></span><br>

            <label for="book_profit">Profit</label><br>
            <input type="text" id="book_profit" name="book_profit" value="0.20"><br>
            <span class="error"><?php echo $book_profit_err; ?></span><br>

            <hr>

            <input type="submit" name="saveBook" value="Save" style="margin: auto; width: 100px; margin-left: 30px;">
            <span class="success"><?php echo $successMessage; ?></span><br>
        </fieldset>
    </div>
</form>

<?php include_once 'fotter/Footer.php'; ?>