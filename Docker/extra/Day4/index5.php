<?php require_once("../lib/common.php"); ?>

    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
        <div  class="border border-3 p-5 w-75 mx-auto">
        <div class="mb-3">
                <h3>PHP script to get the server IP address.</h3>
            </div>
            <?php
            echo "IP Address is: <span class='text-primary fs-5'>",$_SERVER['SERVER_ADDR'],"</span>";
            ?>
            </div>
    </div>
    <?php  require_once("../lib/footer.php"); ?>
