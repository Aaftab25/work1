<?php require_once("../lib/common.php"); ?>

    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
        <div  class="border border-3 p-5  mx-auto">
            <div class="mb-5">
                <h1>Browser Details</h1>
            </div>
            <?php
            echo "Browser Details: <span class='text-primary fs-5'>",$_SERVER['HTTP_USER_AGENT'],"</span>";
            ?>
            </div>
    </div>
    <?php  require_once("../lib/footer.php"); ?>
