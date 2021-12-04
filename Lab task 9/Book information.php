<?php
session_start();

if (isset($_SESSION['user_name'])) {
    require 'head/Top1.php';
    require 'head/Top2.php';
} else {
    header("location:login.php");
}

if (!isset($_POST['name'])) {
    require_once('model/model.php');
    $useres = showAllBooks();
}
?>
<style type="text/css">
    td {
        border: 1px solid black;

    }

    .input-group {
        width: 60%;
        margin: 70px auto 30px auto;
        text-align: center;
    }

    .input-group-addon {
        color: #009432;
    }
    .input-group-addon{
        width: 130px;
        height: 30px;
        border-radius: 10px;
        margin: auto;
        padding: auto;
        margin-top: 5px;
        background:#1376D5;
        color: white;
        box-shadow: 15px 10px 30px 2px #959595;

    }


    .form-control {
        padding: 5px;
        width: 60%;
        box-shadow: 11px 7px 20px 0px #959595;
    }
</style>
<form>
    <!--Search Start -->

    <div class="input-group">
        <h2 class="input-group-addon">Search</h2>
        <div class="search-box">
            <input type="text" placeholder="Search ...." class="form-control" />
            <div class="result"></div>
        </div>
    </div>
    <!-- FInish -->
    <table style="border: 1px solid black ;margin: auto;">

        <tr style="background-color:gray; color: white; ">
            <th>ID</th>
            <th>Book Name</th>
            <th>Author Nmae</th>
            <th>Book Price</th>



        </tr>

        <?php foreach ($useres as $i => $usere) : ?>

            <tr>
                <td><?php echo $usere['ID'] ?></td>
                <td><?php echo $usere['book_name'] ?></td>
                <td><?php echo $usere['author_name'] ?></td>
                <td><?php echo $usere['book_price'] ?></td>


            </tr>

        <?php endforeach; ?>

    </table>
</form>

<script src="js/jquery3.6.0.js"></script>

<script>
    $(document).ready(function() {
        $('.search-box input[type="text"]').on("keyup input", function() {
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if (inputVal.length) {
                $.get("controller/Search_Book.php", {
                    term: inputVal
                }).done(function(data) {
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });

        // Set search input value on click of result item
        $(document).on("click", ".result p", function() {
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
</script>

<?php require 'fotter/Footer.php'; ?>