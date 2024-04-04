<?php

$carName = $_GET['car_name'];
$carModel = $_GET["car_model"];
$carType = $_GET["car_type"];
$carRent = $_GET["car_rent"];

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

    <?php include("./components/Navbar.html"); ?>



    <div class='p-32'>
        <form action="book-car-db.php" class='' method="POST">
            <p class='text-3xl font-semibold'>Book Car</p>


            <!-- Hidden Fields -->

            <input required hidden name='car_name' value=<?php echo $carName; ?> type="text" />
            <input required hidden name='car_model' value=<?php echo $carModel; ?> type="text" />
            <input required hidden name='car_type' value=<?php echo $carType; ?> type="text" />
            <input required hidden name='car_rent' value=<?php echo $carRent; ?> type="text" />

            <!-- Hidden Fields -->

            <div class="flex flex-col gap-3 mt-10">
                <div class="mb-7">
                    <p class='font-semibold text-2xl mb-2 capitalize'>
                        <?php echo $carName; ?> -
                        <?php echo $carModel; ?> (
                        <?php echo $carType; ?> )
                    </p>
                    <p class='text-xl'>Rent :
                        <?php echo $carRent; ?> /- per day
                    </p>
                </div>

                <div class="flex flex-col gap-1">
                    <label>Customer Name</label>
                    <input required name='customer_name' type="text"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>

                <div class="flex flex-col gap-1">
                    <label>Customer Phone</label>
                    <input required name='customer_phone' type="number"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>

                <div class="flex flex-col gap-1">
                    <label>Customer Email</label>
                    <input required name='customer_email' type="email"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>


                <div class="flex flex-col gap-1">
                    <label>Customer Address</label>
                    <input required name='customer_address' type="text"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>


                <div class="flex justify-center mt-6 mb-4">
                    <button
                        class='py-1.5 px-8 border bg-blue-500 text-white font-semibold border-slate-400 rounded-md outline-none'>Book
                        Car</button>
                </div>

            </div>


        </form>
    </div>




    <?php include("./components/Footer.html"); ?>

</body>

</html>