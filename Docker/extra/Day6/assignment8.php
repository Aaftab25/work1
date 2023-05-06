<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(8) Write a PHP script to print "second" and Red from the following array.</h3>
        <p>$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"), "numbers" => array ( 1, 2, 3, 4, 5, 6 ), "holes" => array ( "First", 5 => "Second", "Third") );
</p>
    </div>
    <div class="border border-3 p-4">
        <?php
            $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"), "numbers" => array ( 1, 2, 3, 4, 5, 6 ), "holes" => array ( "First", 5 => "Second", "Third") );

            print_r($color['color']['a']);
            echo"<br>";
            print_r($color['holes']['5']);
           
        ?>
    </div>

</div>
<?php require_once("../lib/footer.php"); ?>