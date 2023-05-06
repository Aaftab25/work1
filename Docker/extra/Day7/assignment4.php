<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(4) Write a PHP script to insert a string at the specified position in a given string.</h3>
        <p>Original String: 'PHP is side language'</p>
    </div>
    <div class="border border-3 p-4">
        <?php
            $str = 'PHP is side language.';
            $rep = 'server ';
            $pos = '7';
            ?><h4 class="text-primary">Result</h4><?php

            echo substr_replace($str,$rep,$pos,0);


        ?>
    </div>
</div>

</div>
<?php require_once("../lib/footer.php"); ?>