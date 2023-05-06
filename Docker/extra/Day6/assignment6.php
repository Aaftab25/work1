<?php require_once("../lib/common.php"); ?>

    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
        <div class="border border-3 p-4">
            <h3>(6) Write a PHP function to change the following array's all values to upper or lower case.</h3>
            <?php 
                $Color = array('A'=>'Blue','B'=>'Green', 'C'=>'Red');
                print_r($Color);
            ?>
        </div>
        <div class="border border-3 p-4">
            <?php
            echo "Values are in lower case.<br>";
                $Color = array_flip($Color);
                $Color = array_change_key_case($Color,CASE_LOWER);
                $Color = array_flip($Color);
                print_r($Color);
                echo "<br><br>Values are in upper case<br>";
                $Color = array_flip($Color);
                $Color = array_change_key_case($Color,CASE_UPPER);
                $Color = array_flip($Color);
                print_r ($Color);
         ?>
         </div>

    </div>
    <?php  require_once("../lib/footer.php"); ?>
