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


    $sql = "SELECT * FROM cars WHERE car_name = '$carName' AND car_model = '$carModel' AND car_type = '$carType'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // Fetching data
        $row = $result->fetch_assoc();

    } else {
        echo "No results found!";
        exit();
    }
} else {

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $carName; ?> (
        <?php echo $carModel; ?> )
    </title>
    <link rel="stylesheet" href="./css/output.css">
</head>

<body>

    <?php include("./components/Navbar.html"); ?>


    <div class="mt-20">

        <div class="flex justify-center">
            <img src="<?php echo $row['car_image']; ?>" alt="<?php echo $carName; ?>" />
        </div>

        <div class="px-40 pt-5">
            <p class='text-3xl font-semibold'>
                <?php echo $carName; ?> (
                <?php echo $carModel; ?> )
            </p>
            <p class='mt-5 text-stone-600 text-lg'>
                <?php echo $row['car_info']; ?>
            </p>

            <div class="flex gap-3 items-center mt-7">
                <span>Rent : </span>
                <p class='border border-slate-400 rounded-md w-fit px-10 py-2'>
                    <?php echo $row['car_rent']; ?> /-
                </p>
                <span> Per Day</span>
            </div>

            <div class="px-7 py-2 flex justify-center items-center mt-10">
                <a href="book-car.php?car_name=<?php echo urlencode($row['car_name']); ?>&car_model=<?php echo urlencode($row['car_model']); ?>&car_type=<?php echo urlencode($row['car_type']); ?>&car_rent=<?php echo urlencode($row['car_rent']); ?>"
                    class='w-fit px-20 bg-blue-500 py-2 text-white font-semibold tracking-wider rounded-md hover:bg-blue-600'>
                    Book Now
                </a>
            </div>

        </div>
    </div>

    <?php include("./components/Footer.html"); ?>

</body>

</html>

<?php

$connection->close();
?>