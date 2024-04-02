<?php

$servername = "localhost";
$username = "id21731308_dark";
$password = "@Dark173";
$database = "id21731308_car";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "car";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>