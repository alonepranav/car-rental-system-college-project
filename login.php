
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

    <div class="h-screen w-screen flex justify-center items-center">

        <form class="border border-slate-400 p-5 rounded-xl w-[28rem]" method="POST" action="adminlogin.php">
            <p class="font-semibold text-3xl">Login Admin</p>

            <br>
            <br>

            <div class="flex flex-col gap-0.5 mb-5">
                <label class="text-lg text-stone-600">Email</label>
                <input type="email" name="email" required id="admin_email" class="border border-slate-400 py-1.5 rounded px-2"
                    placeholder="Enter Email">
            </div>


            <div class="flex flex-col gap-0.5 mb-5">
                <label class="text-lg text-stone-600">Password</label>
                <input type="password" name="password" required id="admin_password" class="border border-slate-400 py-1.5 rounded px-2"
                    placeholder="Enter Password">
            </div>


            <div class="flex flex-col gap-0.5 mt-10 mb-6">
                <button type="submit"
                    class="px-6 py-1.5 text-xl bg-sky-600 rounded-md text-white font-semibold tracking-wider">Login</button>
            </div>

        </form>

    </div>

    <?php include ("./components/Footer.html"); ?>


</body>

</html>