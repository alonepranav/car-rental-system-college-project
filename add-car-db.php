<?php
include ("./ConnectDB.php");
?>


<?php
 
global $connection;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carName = $_POST['car_name'];
    $carModel = $_POST['car_model'];
    $carType = $_POST['car_type'];
    $carInfo = $_POST['car_info'];
    $carRent = $_POST['car_rent'];

    $imagePath = "./cars/" . $carName . ".png";

    $stmt = $connection->prepare("INSERT INTO cars (car_name, car_model, car_type, car_info, car_rent, car_image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $carName, $carModel, $carType, $carInfo, $carRent, $imagePath);

    if ($stmt->execute()) {
        echo "New record created successfully";
        echo "<script>alert('Car record added'); window.location.replace('admin.php')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $stmt->close();
    $connection->close();
}
?>