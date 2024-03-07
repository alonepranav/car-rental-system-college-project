<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "car";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carName = $_POST['car_name'];
    $carModel = $_POST['car_model'];
    $carType = $_POST['car_type'];
    $carInfo = $_POST['car_info'];
    $carRent = $_POST['car_rent'];

    $targetDir = "images/uploads/";
    $targetFile = $targetDir . basename($_FILES["car_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["car_image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }


    if ($_FILES["car_image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }


    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }


    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["car_image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["car_image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $stmt = $connection->prepare("INSERT INTO cars (car_name, car_model, car_type, car_info, car_rent, car_image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $carName, $carModel, $carType, $carInfo, $carRent, $targetFile);

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