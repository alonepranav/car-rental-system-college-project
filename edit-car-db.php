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

    $u_name = $_POST['u_name'];
    $u_model = $_POST['u_model'];
    $u_type = $_POST['u_type'];


    echo "$u_name";

    $targetDir = "images/uploads/";
    $targetFile = $targetDir . basename($_FILES["car_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["car_image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["car_image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["car_image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["car_image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Prepare and bind update statement
    $stmt = $connection->prepare("UPDATE cars SET car_name=?, car_model=?, car_type=?, car_info=?, car_rent=?, car_image=? WHERE car_name=? AND car_model=?");
    $stmt->bind_param("ssssssss", $carName, $carModel, $carType, $carInfo, $carRent, $targetFile, $u_name, $u_model);

    if ($stmt->execute()) {
        echo "Record updated successfully";
        // Redirect to a different page after successful operation
        header("Location: admin.php");
        // exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();
}
?>