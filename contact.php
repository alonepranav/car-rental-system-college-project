
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



    <div class="min-h-screen w-screen px-2 pb-20">
        <div class="mb-7 pt-28 md:pt-28">
            <h2 class="font-mono text-center text-4xl md:text-5xl font-bold">
                Contact Here
            </h2>
            <p class="text-center my-3 text-sm md:text-lg text-stone-500 w-full md:w-[70%] mx-auto">
                Report an issue in website, want to give any suggestion or just want
                to reach me ?
                <br />
                Catch me here 📩
            </p>
        </div>

        <form class="w-full md:w-6/12 p-[3px] rounded-xl mx-auto my-gradient">
            <div class="bg-white rounded-lg overflow-hidden p-5 md:px-10 md:py-7">

                <div class="w-full mb-6">
                    <label for="name" class="block text-sm my-1">
                        Name
                    </label>
                    <input type="text" id="name"
                        class="focus:ring-2 focus:ring-blue-400 outline-none border-2 border-slate-300 py-1.5 px-2 w-full rounded"
                        required />
                </div>

                <div class="w-full mb-6">
                    <label for="email" class="block text-sm my-1">
                        Email
                    </label>
                    <input type="eamil" id="email"
                        class="focus:ring-2 focus:ring-blue-400 outline-none border-2 border-slate-300 py-1.5 px-2 w-full rounded" />
                </div>

                <div class="w-full mb-6">
                    <label for="message" class="block text-sm my-1">
                        Message
                    </label>

                    <textarea id="message" rows="3" required
                        class="focus:ring-2 focus:ring-blue-400 outline-none border-2 border-slate-300 py-1.5 px-2 w-full rounded"></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="py-[0.5rem] px-5 text-sm tracking-widest bg-black rounded text-white">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>



    <?php include("./components/Footer.html"); ?>

</body>

</html>