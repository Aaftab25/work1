<?php require_once("../lib/common.php"); ?>

            
            <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
                <?php
                     $w = $_POST['weight'];
                     $h = $_POST['height'];

                    $bmi = $w/($h*$h);

                    echo "BMI = ",$bmi;
                ?>
            </div>
            <?php  require_once("../lib/footer.php"); ?>
