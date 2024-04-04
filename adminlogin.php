<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct_email = "admin@gmail.com";
    $correct_password = "123";

    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email == $correct_email && $password == $correct_password) {
        $_SESSION["adminloggedin"] = true;
        echo "<script>window.location.href='admin.php';</script>";
        exit();
    } else {
        echo "<script>alert('Wrong credentials');window.location.href='admin.php';</script>";
    }
}
?>
