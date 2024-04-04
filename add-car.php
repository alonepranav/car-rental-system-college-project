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

    <div class='min-h-screen w-screen flex justify-center items-center pt-32 pb-10'>
        <form class="rounded-2xl w-2/4 px-5 py-7 border border-slate-400" enctype="multipart/form-data"
            action="add-car-db.php" method="POST">

            <p class='text-3xl font-semibold text-center'>Add Car</p>

            <div class="flex flex-col gap-3 mt-10">

                <div class="flex flex-col gap-1">
                    <label>Car Name</label>
                    <select required name="car_name" id=""
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none'>
                        <option value="">Select Car</option>
                        <option value="Thar">Thar</option>
                    </select>
                </div>

                <div class="flex flex-col gap-1">
                    <label>Car Model</label>
                    <input required name='car_model' type="text"
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
                    <input required name='car_info' type="text"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>

                <div class="flex flex-col gap-1">
                    <label>Car Rent / Day</label>
                    <input required name='car_rent' type="text"
                        class='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                </div>

                <div class="flex justify-center mt-6 mb-4">
                    <button
                        class='py-1.5 px-8 border bg-blue-500 text-white font-semibold border-slate-400 rounded-md outline-none'>Add
                        Car</button>
                </div>

            </div>
        </form>
    </div>

    <?php include ("./components/Footer.html"); ?>

</body>

</html>