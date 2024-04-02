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

    $u_name = $_POST['u_name'];
    $u_model = $_POST['u_model'];
    $u_type = $_POST['u_type'];

    $imagePath =  "./cars/".$carName.".png";
    
    $stmt = $connection->prepare("UPDATE cars SET car_name=?, car_model=?, car_type=?, car_info=?, car_rent=?, car_image=? WHERE car_name=? AND car_model=?");
    $stmt->bind_param("ssssssss", $carName, $carModel, $carType, $carInfo, $carRent, $imagePath, $u_name, $u_model);

    if ($stmt->execute()) {
        echo "<script>alert('Record updated successfully');window.location.replace('admin.php')</script>";
    } else {
        echo "<script>alert('Error updating record');window.location.replace('admin.php')</script>";
    }

    $stmt->close();
    $connection->close();
}
?>