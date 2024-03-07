<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "car";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_GET['car_name']) && isset($_GET['car_model']) && isset($_GET['car_type'])) {

    $carName = $_GET['car_name'];
    $carModel = $_GET['car_model'];
    $carType = $_GET['car_type'];
    $carRent = $_GET['car_rent'];


    $sql = "DELETE FROM cars WHERE car_name = '$carName' AND car_model = '$carModel' AND car_type = '$carType'";
    $result = $connection->query($sql);

    if ($result) {
        echo "<script> alert('Car Deleted'); window.location.replace('admin.php')</script>";
    } else {
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>


<?php
$connection->close();
?>