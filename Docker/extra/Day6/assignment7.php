<?php require_once("../lib/common.php"); ?>

    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(7) Write a PHP program to merge (by index) the following two arrays.</h3>
        <p>$array1 = array (array(77, 87), array(23, 45));</p>
        <p>$array2 = array ("w3resource", "com");</p>
    </div>
    <div class="border border-3 p-4">
        <?php
        $array1 = array (array(77, 87), array(23, 45));
         $array2 = array ("w3resource", "com");

         $array3 = array_chunk($array2,1);

        $array4 = array();
        for ($i=0; $i < count($array1); $i++) { 
      
                array_push($array4,(array_merge($array3[$i],$array1[$i])));
            }
            print_r($array4);
        // ?>
      
    </div>
    </div>
    <?php  require_once("../lib/footer.php"); ?>
