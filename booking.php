<?php
include ("./ConnectDB.php");
?>

<?php

session_start();

if (!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] === false) {
    echo "<script>window.location.href='login.php';</script>";
    exit;
}



global $connection;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['approve'])) {
        $car_name = $_POST['car_name'];
        $car_model = $_POST['car_model'];
        $car_type = $_POST['car_type'];
        $car_rent = $_POST['car_rent'];
        $customer_name = $_POST['customer_name'];
        $customer_email = $_POST['customer_email'];
        $customer_phone = $_POST['customer_phone'];
        $customer_address = $_POST['customer_address'];

        $sql_approve = "INSERT INTO approvebooking (car_name, car_model, car_type, car_rent, customer_name, customer_email, customer_phone, customer_address) 
                        VALUES ('$car_name', '$car_model', '$car_type', '$car_rent', '$customer_name', '$customer_email', '$customer_phone', '$customer_address')";

        if ($connection->query($sql_approve) === TRUE) {
            echo "<script>alert('Booking approved successfully.');</script>";



            $sql_delete = "DELETE FROM bookcar WHERE car_name = '$car_name' AND car_model = '$car_model' AND car_type = '$car_type' AND customer_name = '$customer_name' AND customer_email = '$customer_email'";
            if ($connection->query($sql_delete) === TRUE) {
            } else {
                echo "Error: " . $sql_delete . "<br>" . $connection->error;
            }





        } else {
            echo "Error: " . $sql_approve . "<br>" . $connection->error;
        }
    } elseif (isset($_POST['cancel'])) {
        $car_name = $_POST['car_name'];
        $car_model = $_POST['car_model'];
        $car_type = $_POST['car_type'];
        $car_rent = $_POST['car_rent'];
        $customer_name = $_POST['customer_name'];
        $customer_email = $_POST['customer_email'];
        $customer_phone = $_POST['customer_phone'];
        $customer_address = $_POST['customer_address'];

        $sql_cancel = "INSERT INTO cancelbooking (car_name, car_model, car_type, car_rent, customer_name, customer_email, customer_phone, customer_address) 
                        VALUES ('$car_name', '$car_model', '$car_type', '$car_rent', '$customer_name', '$customer_email', '$customer_phone', '$customer_address')";

        if ($connection->query($sql_cancel) === TRUE) {
            echo "<script>alert('Booking cancelled successfully.');</script>";





            $sql_delete = "DELETE FROM bookcar WHERE car_name = '$car_name' AND car_model = '$car_model' AND car_type = '$car_type' AND customer_name = '$customer_name' AND customer_email = '$customer_email'";
            if ($connection->query($sql_delete) === TRUE) {
            } else {
                echo "Error: " . $sql_delete . "<br>" . $connection->error;
            }







        } else {
            echo "Error: " . $sql_cancel . "<br>" . $connection->error;
        }
    }
}

$sql = "SELECT * FROM bookcar";
$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/output.css">
</head>

<body>

    <?php include ("./components/Navbar.html"); ?>

    <div class='py-28 px-20'>

        <div class="text-3xl font-semibold tracking-wider">
            <a href="admin.php" class="text-blue-500 underline">Admin</a>
        </div>

        <div class="mt-10 flex gap-5">
            <a href='approved-booking.php' class='px-6 py-1.5 bg-rose-500 rounded-md text-white font-semibold'>Approved
                Bookings</a>
            <a href='cancelled-booking.php'
                class='px-6 py-1.5 bg-pink-500 rounded-md text-white font-semibold'>Cancelled Bookings</a>
        </div>

        <div class="mt-10 flex flex-col gap-6">

            <?php if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <form method="post" action="">
                        <input type="hidden" name="car_name" value="<?php echo $row['car_name']; ?>">
                        <input type="hidden" name="car_model" value="<?php echo $row['car_model']; ?>">
                        <input type="hidden" name="car_type" value="<?php echo $row['car_type']; ?>">
                        <input type="hidden" name="car_rent" value="<?php echo $row['car_rent']; ?>">
                        <input type="hidden" name="customer_name" value="<?php echo $row['customer_name']; ?>">
                        <input type="hidden" name="customer_email" value="<?php echo $row['customer_email']; ?>">
                        <input type="hidden" name="customer_phone" value="<?php echo $row['customer_phone']; ?>">
                        <input type="hidden" name="customer_address" value="<?php echo $row['customer_address']; ?>">

                        <div class="flex border border-slate-600 gap-5 px-5 rounded-xl h-80">
                            <div class="py-3">
                                <p class='text-2xl font-semibold '>
                                    Car :
                                    <?php echo $row['car_name']; ?> - (
                                    <?php echo $row['car_model']; ?> ) &nbsp; [
                                    <?php echo $row['car_type']; ?> ]
                                </p>
                                <p class='mt-3 text-2xl font-semibold'>
                                    Rent :
                                    <?php echo $row['car_rent']; ?>/- Rs
                                </p>

                                <div class="border border-slate-700 w-full mt-2">
                                </div>

                                <p class='mt-2 text-xl'>
                                    Customer Name :
                                    <?php echo $row['customer_name']; ?>
                                </p>
                                <p class='mt-2 text-xl'>
                                    Customer Email :
                                    <?php echo $row['customer_email']; ?>
                                </p>
                                <p class='mt-2 text-xl'>
                                    Customer Phone :
                                    <?php echo $row['customer_phone']; ?>
                                </p>
                                <p class='mt-2 text-xl'>
                                    Customer Address :
                                    <?php echo $row['customer_address']; ?>
                                </p>

                                <div class="mt-4 flex gap-6">
                                    <button type="submit" name="approve"
                                        class='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-sky-500 hover:bg-sky-600'>Approve
                                        Booking</button>
                                    <button type="submit" name="cancel"
                                        class='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-red-500 hover:bg-red-600'>Cancel
                                        Booking</button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php }
            } else {
                echo "<p class='text-3xl font-semibold'>No Car Booking Present</p>";
            } ?>

        </div>

    </div