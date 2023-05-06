<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(5) Write a PHP script to remove a part of a string from the beginning. [Make input dynamic with email validation]</h3>
        <p>
        Sample string: 'radix@onprintshop.com' <br>
        Expected Output: onprintshop.com'
        </p>
    </div>
    <div class="border border-3 p-4">
        <form action="" method="post">  
            <div>
                <input type="text" name="str1" class="form-control my-2" required>
            </div>
            <div>
                <input type="submit" value="submit" name="submit" class="btn btn-info mt-3">
            </div>
        </form>
    </div>
    <div class="border border-3 p-4">
        <?php
            if (isset($_POST['submit'])) {
                $str1 = $_POST['str1'];

                $str2 = explode("@",$str1);
            ?><h4 class="text-primary">Result</h4><?php

                echo "Input: $str1 <br>";
                print_r("Output: $str2[1]");
                
            }
        ?>
    </div>
</div>

</div>
<?php require_once("../lib/footer.php"); ?>