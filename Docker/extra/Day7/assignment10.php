<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(10) Write a PHP script to replace the first 'PHP' of the following string with 'Java'.</h3>
        <p>
        Sample date: 'PHP is server side language and PHP is loosely coupled language.'<br>
        Expected Result: Java is server side language and PHP is loosely coupled language.
        </p>
    </div>
    <div class="border border-3 p-4">
    <h4 class="text-primary">Result</h4>
        <?php
            $str = "PHP is server side language and PHP is loosely coupled language.";
            echo "Output: ".substr_replace($str,"Java",0,3);
        ?>
    </div>
</div>

</div>
<?php require_once("../lib/footer.php"); ?>