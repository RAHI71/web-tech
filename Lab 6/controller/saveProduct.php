<?php
require_once 'model/model.php';

/*

	// Name
    if (empty($_POST['name'])) {
        $messages['errors']['name'] = "Name is required";
        $has_err = true;
    } else if (strlen($_POST['name']) < 2) {
        $messages['errors']['name'] = "Name must be greater than 2 character";
        $has_err = true;
    } else if (preg_match("/^[a-zA-Z-.]/", $_POST['name']) != 1) {
        $messages['errors']['name'] = "Name must be contains alpha character, (.) and (-)";
        $has_err = true;
    } else {
        $name = validate_input($_POST['name']);
        $messages['data']['name'] = $name;
    }

    // Buying price
    if (empty($_POST['buyingprice'])) {
        $messages['errors']['buyingprice'] = "Buying price is required";
        $has_err = true;
    } else if (!is_numeric($_POST['buyingprice'])) {
        $messages['errors']['buyingprice'] = "Buying price must be numeric";
        $has_err = true;
    } else {
        $buyingprice = validate_input($_POST['buyingprice']);
        $messages['data']['buyingprice'] = $buyingprice;
    }

    // Selling price
    if (empty($_POST['book_price_err'])) {
        $messages['errors']['book_price_err'] = "Selling price is required";
        $has_err = true;
    } else if (!is_numeric($_POST['book_price_err'])) {
        $messages['errors']['book_price_err'] = "Selling price must be numeric";
        $has_err = true;
    } else {
        $book_price_err = validate_input($_POST['book_price_err']);
        $messages['data']['book_price_err'] = $sellingprice;
    }

*/
$flag = false;

$book_name_err = "";
$authon_name_err = "";
$book_price_err = "";

$data = [];

if (isset($_POST['saveBook'])) {
    // Book Name
    if (empty($_POST['book_name'])) {
        $book_name_err = "Book Name is required";
        $flag = true;
    } else {
        $data['book_name'] = htmlspecialchars(trim($_POST['book_name']));
    }

    // Author Name
    if (empty($_POST['author_name'])) {
        $authon_name_err = "Author Name is required";
        $flag = true;
    } else {
        $data['author_name'] = htmlspecialchars(trim($_POST['author_name']));
    }


 // Selling price
    if (empty($_POST['book_price'])) {
    	   $book_price_err = "Price is required";
        $flag = true;
    } else {
        $data['book_price'] = htmlspecialchars(trim($_POST['book_price']));
    }

        
    if (!$flag) {
        if (addBook($data)) {
            echo 'Successfully added!!';
            echo '<a href="../Book information.php">Go Book information</a>';
        }
    }
}
