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

    <?php
    session_start();

    if (!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] === false) {
        echo "<script>window.location.href='login.php';</script>";
        exit;
    }
    ?>

    <div class='py-28 px-20'>

        <div class="text-3xl font-semibold tracking-wider">
            <p><a href="admin.php" class="text-blue-500 underline">Admin</a>
                / Cancelled Car Booking</p>
        </div>

        <!-- Display Approved Car Bookings -->
        <table class="mt-10 w-full border-collapse rounded-md overflow-hidden">
            <thead>
                <tr>
                    <td class="border border-gray-400 font-semibold px-4 py-2">Sr.No</td>
                    <td class="border border-gray-400 font-semibold px-4 py-2">Car Name</td>
                    <td class="border border-gray-400 font-semibold px-4 py-2">Car Model</td>
                    <td class="border border-gray-400 font-semibold px-4 py-2">Car Type</td>
                    <td class="border border-gray-400 font-semibold px-4 py-2">Car Rent</td>
                    <td class="border border-gray-400 font-semibold px-4 py-2">Customer Name</td>
                    <td class="border border-gray-400 font-semibold px-4 py-2">Customer Email</td>
                    <td class="border border-gray-400 font-semibold px-4 py-2">Customer Phone</td>
                    <td class="border border-gray-400 font-semibold px-4 py-2">Customer Address</td>
                </tr>
            </thead>
            <tbody class="even:bg-slate-200 odd:bg-slate-600">
                <?php
                include ("./ConnectDB.php");
                ?>


                <?php

                global $connection;

                $sql = "SELECT * FROM cancelbooking";
                $result = $connection->query($sql);

                $serialNumber = 1; // Initialize counter
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='border border-gray-400 px-4 py-2'>" . $serialNumber . "</td>"; // Display serial number
                        echo "<td class='border border-gray-400 px-4 py-2'>" . $row['car_name'] . "</td>";
                        echo "<td class='border border-gray-400 px-4 py-2'>" . $row['car_model'] . "</td>";
                        echo "<td class='border border-gray-400 px-4 py-2'>" . $row['car_type'] . "</td>";
                        echo "<td class='border border-gray-400 px-4 py-2'>" . $row['car_rent'] . "</td>";
                        echo "<td class='border border-gray-400 px-4 py-2'>" . $row['customer_name'] . "</td>";
                        echo "<td class='border border-gray-400 px-4 py-2'>" . $row['customer_email'] . "</td>";
                        echo "<td class='border border-gray-400 px-4 py-2'>" . $row['customer_phone'] . "</td>";
                        echo "<td class='border border-gray-400 px-4 py-2'>" . $row['customer_address'] . "</td>";
                        echo "</tr>";
                        $serialNumber++; // Increment counter
                    }
                } else {
                    echo "<tr><td colspan='9' class='text-center'>No approved car bookings found.</td></tr>";
                }
                $connection->close();
                ?>
            </tbody>
        </table>
        <!-- End of Approved Car Bookings Table -->

    </div>

    <?php include ("./components/Footer.html"); ?>

</body>

</html>