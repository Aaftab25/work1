<?php require_once("../lib/common.php"); ?>

    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
        <div class="border border-3 p-4">
            <h3>(5) Write a PHP script that insert a input item in an array in given input position</h3>
            <?php
            $data_array = array();
            array_push($data_array,1,2,3,4,5);
            echo ("Array: ".implode(" ",$data_array));

            ?>
            </div>
            <div class="border border-3 p-4">
                <?php
                    array_splice($data_array,3,0,"$");

                    echo ("New Array: ".implode(" ",$data_array));
                ?>
            </div>

    </div>
    <?php  require_once("../lib/footer.php"); ?>
