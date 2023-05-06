<?php require_once("../lib/common.php"); ?>

    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
        <?php
            echo nl2br("Date Format 1: ".date("d-M-Y")."\n");
            echo nl2br("Date Format 2: ".date("m d Y G:i A")."\n");
            echo nl2br("Date Format 3: ".date("dS F Y G:i:s")."\n");
            echo nl2br("Date Format 4: ".date("d-M-Y")."\n");
            $Tomorrow = date("d");
            // echo $Tomorrow;
            echo nl2br("Tomorrow:  ".date("d-M-Y",strtotime("tomorrow"))."\n");


            echo nl2br("Get the date of Next week from today ".date("d-M-Y",strtotime("+1 week"))."\n");
            echo nl2br("Get the date of Next Monday ".date("d-M-Y",strtotime("0 week monday"))."\n");
        ?>

    </div>
    <?php  require_once("../lib/footer.php"); ?>
