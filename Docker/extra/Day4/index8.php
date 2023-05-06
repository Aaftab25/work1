<?php require_once("../lib/common.php"); ?>

    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
        <?php
            echo "https or http: <br><span class='text-primary fs-5'>",$_SERVER['HTTP_REFERER'],"</span>";
        ?>
    </div>
    <?php  require_once("../lib/footer.php"); ?>
