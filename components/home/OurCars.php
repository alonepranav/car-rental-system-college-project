<?php
include ("./ConnectDB.php");
?>
<div class="pt-14 pb-7">
    <div class="text-center text-4xl font-semibold tracking-wide">
        <p>Our <span class='text-blue-500'>Cars</span></p>
    </div>

    <div class="flex gap-6 mt-20 items-center justify-center flex-wrap">


        <?php

        global $connection;

        $sql = "SELECT * FROM cars ";

        $result = $connection->query($sql);


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                ?>
                <div class='flex gap-2 overflow-hidden flex-col justify-between h-96 w-80 rounded-lg border border-slate-500'>
                    <div class="p-3 h-48 overflow-hidden">
                        <img src="<?php echo $row['car_image']; ?>" alt="<?php echo $row['car_name']; ?>" />
                    </div>
                    <div class="p-4 bg-stone-100 h-52">
                        <p class='text-2xl font-semibold pb-3'>
                            <?php echo $row['car_name']; ?>
                        </p>
                        <p>
                            <?php echo $row['car_info']; ?>
                        </p>
                        <p class='flex gap-3 items-center mt-3'>
                            <span>
                                <?php echo $row['car_rent']; ?>
                            </span>
                            <i class="bi bi-currency-rupee"></i>
                        </p>

                        <a href="car-info.php?car_name=<?php echo urlencode($row['car_name']); ?>&car_model=<?php echo urlencode($row['car_model']); ?>&car_type=<?php echo urlencode($row['car_type']); ?>&car_rent=<?php echo urlencode($row['car_rent']); ?>"
                            class='bg-amber-400 px-5 py-1.5 text-white font-semibold mt-3 block w-fit rounded-md'>See
                            Details</a>

                    </div>
                </div>
                <?php
            }
        } else {
            echo "0 results";
        }

        // Close the connection
        $connection->close();
        ?>





    </div>

</div>