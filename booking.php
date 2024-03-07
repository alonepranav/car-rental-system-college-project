<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/output.css">
</head>

<body>

    <?php include("./components/Navbar.html"); ?>

    <div class='py-28 px-20'>

        <div class="text-3xl font-semibold tracking-wider">
            <p>Admin</p>
        </div>

        <div class="mt-10 flex gap-5">
            <a href='admin.php' class='px-6 py-1.5 bg-blue-600 rounded-md text-white font-semibold'>All Cars</a>
            <a href='' class='px-6 py-1.5 bg-amber-500 rounded-md text-white font-semibold'>Refresh</a>
            <a href='' class='px-6 py-1.5 bg-emerald-500 rounded-md text-white font-semibold'>See Bookings</a>
        </div>

        <div class="mt-10 flex flex-col gap-6">

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "car";

            $connection = new mysqli($servername, $username, $password, $database);

            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            $sql = "SELECT * FROM bookcar";
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    ?>
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
                                <a href=""
                                    class='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-sky-500 hover:bg-sky-600'>Approve</a>
                                <a href=""
                                    class='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-red-500 hover:bg-red-600'>Cancel
                                    Booking</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='text-3xl font-semibold'>No cars present</p>";
            }
            $connection->close();
            ?>



        </div>


    </div>




    <?php include("./components/Footer.html"); ?>

</body>

</html>