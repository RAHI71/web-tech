<?php

require_once 'model/model.php';

if (isset($_SESSION['user_name'])) {
} else {
    $name = $email = $gender = $dob = $password = $Username = $rpassword = $massage = $error = $encrypted_password = "";
}

$nameerr = $emailerr = $gendererr = $doberr = $Usernameerr = $passworderr = $rpassworderr = "";
$update = "on";
$flag = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameerr = "Name is required";
        $flag = 0;
        $update = "off";
    } else {
        $name = ($_POST["name"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameerr = "Period & Dash Allowed";
            $flag = 0;
        } elseif (str_word_count($name) < 2) {
            $nameerr = "Contains At Least Two Words";
            $flag = 0;
        }
    }

    if (empty($_POST["email"])) {
        $emailerr = "Email is required";
        $flag = 0;
        $update = "off";
    } else {
        $email = ($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerr = "Invalid email format";
            $flag = 0;
        }
    }

    if (empty($_POST["user_name"])) {
        $Usernameerr = "*Insert Username";
        $flag = 0;
    } else {
        $Username = ($_POST["user_name"]);
        if (preg_match('/^[a-zA-Z0-9]$/', $Username)) {
            $Usernameerr = "*Invalid Input";
            $flag = 0;
        } elseif (str_word_count($Username) < 2) {
            $Usernameerr = "*Minimum Two Characters";
            $flag = 0;
        }
    }

    if (empty($_POST["password"])) {
        $passworderr = "*Insert password";
        $flag = 0;
    } else {
        $password = ($_POST["password"]);
        if (strlen($password) < 8) {
            $passworderr = "Your Password Must Contain At Least 8 Characters!";
            $flag = 0;
        } elseif (!preg_match("/[!,@,#,$,%]/", $password)) {
            $passworderr = "*Minimum One Special Character";
            $flag = 0;
        }
    }

    if (empty($_POST["rpassword"])) {
        $rpassworderr = "*Retype Password";
        $flag = 0;
    } else {
        $rpassword = ($_POST["rpassword"]);
        if (strcmp($password, $rpassword) == 1) {
            $rpassworderr = "*Password not match";
            $flag = 0;
        }
    }

    if (empty($_POST["dob"])) {
        $doberr = "Date Of Birth Is Required";
        $flag = 0;
        $update = "off";
    } else {
        $dob = ($_POST["dob"]);
    }

    if (empty($_POST["gender"])) {
        $gendererr = "Gender is required";
        $flag = 0;
        $update = "off";
    } else {
        $gender = ($_POST["gender"]);
    }

    // echo '<pre>';
    // var_dump($name, $email, $user_name, $password, $rpassword, $dob, $gender);
    // echo '</pre>';
    // exit;

    if ($flag == 1) {
        if (isset($_POST['saveUser'])) {
            $data['name'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            $data['user_name'] = $_POST['user_name'];
            $data['password'] = $_POST['password'];
            $data['gender'] = $_POST['gender'];
            $data['dob'] = $_POST['dob'];

            if (addUser($data)) {
                echo 'Successfully added!!';
            }
        }
    }

    if ($update == "on"); {

        if (isset($_POST['updateUser']) && isset($_SESSION['user_name'])) {
            $data['name'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            $data['gender'] = $_POST['gender'];
            $data['dob'] = $_POST['dob'];

            if (updateUser($_SESSION['user_name'], $data)) {
                echo 'Successfully updated!!';
                header('Location: view profile.php');
            }
        }
    }
}
