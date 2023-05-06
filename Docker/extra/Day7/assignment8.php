<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(8) Write a PHP script to put a string in an array.</h3>
        <p>Sample strings: "Twinkle, twinkle, little star, \nHow I wonder what you are.\nUp above the world so high, \nLike a diamond in the sky.";</p>
    </div>
    <div class="border border-3 p-4">
        <?php 
        $strings = "Twinkle, twinkle, little star, \nHow I wonder what you are.\nUp above the world so high, \nLike a diamond in the sky.";
 
        $array_str = explode("\n",$strings);
        ?><h4 class="text-primary">Result</h4><?php

        echo var_dump($array_str). "<br>";
      
        ?>
    </div>
</div>

</div>
<?php require_once("../lib/footer.php"); ?>