<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(3) Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3>
        <?php
            $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65,64, 68, 73, 75, 79, 73";
            echo $month_temp;
            $month_array = explode(", ",$month_temp);
            // array_push($month_array,);
        ?>
    </div>
    <div class="border border-3 p-4">
        <?php

            sort($month_array);
            echo (implode(" ",$month_array)."<br>");
            $min5 = array_slice(array_unique($month_array),0,5);
            // print_r (($min5));
            

            $max5 = array_slice(array_unique($month_array),-5,5);
            // print_r($max5);

            $min5_avg = array_sum($min5)/count($min5);
            echo "Five Lowest Temperatures Average: <span class='text-primary fs-4'> $min5_avg </span> <br>";

            $max_avg = array_sum($max5)/count($max5);
            echo "Five Highest Temperatures Average: <span class='text-primary fs-4'> $max_avg</span>";
            
            //asort($month_temp);

            //echo $month_temp;
        ?>
    </div>

</div>
<?php require_once("../lib/footer.php"); ?>