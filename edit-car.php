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













    <div class='min-h-screen w-screen flex justify-center items-center pt-32 pb-10'>
        <form class="rounded-2xl w-2/4 px-5 py-7 border border-slate-400" enctype="multipart/form-data"
            action="edit-car-db.php" method="POST">


            <!-- Hidden Fields -->

            <input type="text" hidden name="u_name" value='<?php echo "$carName" ?>'>
            <input type="text" hidden name="u_model" value='<?php echo "$carModel" ?>'>
            <input type="text" hidden name="u_type" value='<?php echo "$carType" ?>'>

            <!-- Hidden Fields -->


            <p class='text-3xl font-semibold text-center'>Edit Car</p>

            <div class="flex flex-col gap-3 mt-10">

                <div class="flex flex-col gap-1">
                    <label>Car Name</label>
                    <input required name='car_name' type="text" value="<?php echo $row['car_name']; ?>"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>

                <div class="flex flex-col gap-1">
                    <label>Car Model</label>
                    <input required name='car_model' type="text" value="<?php echo $row['car_model']; ?>"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>

                <div class="flex flex-col gap-1">
                    <label>Car Type</label>
                    <select name='car_type' required
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none'>
                        <option value="">Select Car type</option>
                        <option value="sports">Sports</option>
                        <option value="luxorious">Luxorious</option>
                        <option value="vintage">Vintage</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="flex flex-col gap-1">
                    <label>Car Info</label>
                    <input required name='car_info' type="text" value="<?php echo $row['car_info']; ?>"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>

                <div class="flex flex-col gap-1">
                    <label>Car Rent / Day</label>
                    <input required name='car_rent' type="text" value="<?php echo $row['car_rent']; ?>"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>

                <div class="flex flex-col gap-1">
                    <label>Car Image</label>
                    <input required name='car_image' type="file"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>

                <div class="flex justify-center mt-6 mb-4">
                    <button
                        class='py-1.5 px-8 border bg-blue-500 text-white font-semibold border-slate-400 rounded-md outline-none'>Edit
                        Car</button>
                </div>

            </div>
        </form>
    </div>
















    <?php include("./components/Footer.html"); ?>

</body>

</html>

<?php

$connection->close();
?>