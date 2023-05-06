<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(2) Write a PHP script to replace multiple characters from the following string.</h3>

        <p>Sample String: '\"\1+2/3*2:2-3/4*3'<br>
            Expected Output: '1 2 3 2 2 3 4 3' </p>
    </div>
    <div class="border border-3 p-4">
        <form action="" method="post">
            <div>
                <input type="text" name="val1" class="form-control" required>
            </div>
            <div>
                <input type="submit" value="Submit" class="btn btn-info mt-3" name="submit">
            </div>
        </form>
    </div>
    <div class="border border-3 p-4">
        <?php
            if(isset($_POST['submit'])){
                $val1 = $_POST['val1'];
                // print_r(str_split('\\+/"*:'));
                $result = str_replace(str_split('\+/"-*:'),' ',$val1);
            ?><h4 class="text-primary">Result</h4><?php

                echo "Input: $val1 <br>";
                echo "Output: $result";
            }
        ?>
    </div>
</div>

</div>
<?php require_once("../lib/footer.php"); ?>