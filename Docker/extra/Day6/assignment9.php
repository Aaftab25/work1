<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(9) Write a PHP script to sort the following associative array</h3>
        <p>array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40")</p>
    </div>
    <div class="border border-3 p-4">
        <?php
            $name_age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

            echo "a) ascending order sort by value<br>";
            asort($name_age);
            print_r($name_age);
            echo "<br><br>b) ascending order sort by Key<br>";
            ksort($name_age);
            print_r($name_age);
            echo "<br><br>c) descending order sorting by Value<br>";
            arsort($name_age);
            print_r($name_age);
            echo "<br><br>d) descending order sorting by Key<br>";
            krsort($name_age);
            print_r($name_age);
        ?>
    </div>
</div>
<?php require_once("../lib/footer.php"); ?>