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
            <a href='add-car.php' class='px-6 py-1.5 bg-blue-600 rounded-md text-white font-semibold'>Add Cars</a>
            <a href='' class='px-6 py-1.5 bg-amber-500 rounded-md text-white font-semibold'>Refresh</a>
            <a href='booking.php' class='px-6 py-1.5 bg-emerald-500 rounded-md text-white font-semibold'>See
                Bookings</a>
            <button id="logout" class='px-6 py-1.5 bg-red-500 rounded-md text-white font-semibold'>Log Out</button>
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

            $sql = "SELECT * FROM cars";
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="flex border border-slate-600 gap-5 px-5 rounded-xl h-64">
                        <div class="flex justify-center items-center h-full w-[30rem]">
                            <img src="<?php echo $row['car_image']; ?>" alt="<?php echo $row['car_name']; ?>"
                                class='h-full w-full object-contain' />
                        </div>
                        <div class="py-5">
                            <p class='text-2xl font-semibold '>
                                <?php echo $row['car_name']; ?>
                            </p>
                            <p class='mt-3'>
                                <?php echo $row['car_info']; ?>
                            </p>
                            <p class='mt-3 font-semibold'>
                                <?php echo $row['car_rent']; ?> INR
                            </p>
                            <p class='mt-3 font-semibold'>
                                TYPE :
                                <?php echo $row['car_type']; ?>
                            </p>
                            <div class="mt-8 flex gap-6">
                                <a href="edit-car.php?car_name=<?php echo urlencode($row['car_name']); ?>&car_model=<?php echo urlencode($row['car_model']); ?>&car_type=<?php echo urlencode($row['car_type']); ?>&car_rent=<?php echo urlencode($row['car_rent']); ?>"
                                    class='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-sky-500 hover:bg-sky-600'>
                                    Edit
                                </a>

                                <a href="delete-car.php?car_name=<?php echo urlencode($row['car_name']); ?>&car_model=<?php echo urlencode($row['car_model']); ?>&car_type=<?php echo urlencode($row['car_type']); ?>&car_rent=<?php echo urlencode($row['car_rent']); ?>"
                                    class='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-red-500 hover:bg-red-600'>
                                    Delete
                                </a>
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


    <script>

        const logout  = document.querySelector("#logout")
        logout.onclick = () => {
            localStorage.clear()
            window.location.replace("login.php")
        }


        let l = localStorage.getItem("admin-login")
        if (l == null) {
            window.location.replace("login.php");
        }
        else {
            l = JSON.parse(l);

            if (l.login) {
                if (l.email != "star@gmail.com") {
                    window.location.replace("login.php");
                }
            }
            else {
                window.location.replace("login.php");
            }
        }
    </script>

</body>

</html>