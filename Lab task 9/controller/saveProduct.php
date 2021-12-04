<?php
require_once 'model/model.php';

$flag = false;

$book_name_err = "";
$authon_name_err = "";
$book_price_err = "";
$book_profit_err = "";

$successMessage = "";

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

    // Book Profit
    if (empty($_POST['book_profit'])) {
        $book_profit_err = "Book Profit is required";
        $flag = true;
    } else {
        $data['book_profit'] = htmlspecialchars(trim($_POST['book_profit']));
    }

    if (!$flag) {
        if (addBook($data)) {
            $successMessage = 'Successfully added!!';
        }
    }
}
