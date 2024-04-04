<?php
include ("./ConnectDB.php");
?>


<?php
 
global $connection;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $carName = $_POST['car_name'];
    $carModel = $_POST['car_model'];
    $carType = $_POST['car_type'];
    $carRent = $_POST['car_rent'];

    $customerName = $_POST['customer_name'];
    $customerEmail = $_POST['customer_email'];
    $customerPhone = $_POST['customer_phone'];
    $customerAddress = $_POST['customer_address'];


    $stmt = $connection->prepare("INSERT INTO bookcar (car_name,car_model,car_type,car_rent,customer_name,customer_email,customer_phone,customer_address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssss", $carName, $carModel, $carType, $carRent, $customerName, $customerEmail, $customerPhone, $customerAddress);

    if ($stmt->execute()) {
        echo "Car Booked";
        echo "<script>alert('Car Booked'); window.location.replace('index.php')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $stmt->close();
    $connection->close();
}
?>