<?php require_once("../lib/common.php"); ?>

            
            <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
                <?php
                    $doller = $_POST['dollar'];

                    echo "Euros = ",$doller*0.911639;
                ?>
            </div>
            <?php  require_once("../lib/footer.php"); ?>

