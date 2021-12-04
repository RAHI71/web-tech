<?php

require_once "../model/model.php";

if (isset($_REQUEST["term"])) {
    if(!isset($_REQUEST['term']) || empty($_REQUEST["term"])) {
        echo "<p>No matches found</p>";
        return;
    }

    $results = searchProduct(isset($_REQUEST["term"]) ? $_REQUEST["term"] : "");

    
    foreach ($results as $result) {

        echo "<a href='#'?id=" . $result["ID"] . "'>" . $result["book_name"] . "</a><br>";
    }
} else {
    echo "<p>No matches found</p>";
}