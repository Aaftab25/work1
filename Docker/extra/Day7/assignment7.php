<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(7) Write a PHP script to get the filename component of the following path.</h3>
        <p>
        Sample path: "http://www.onprintshop.com/content.php" <br>
        Expected Output: 'content'
        </p>
    </div>
    <div class="border border-3 p-4">
        <form action="" method="post">  
            <div>
                <input type="text" name="path" id="path" class="form-control" required>
            </div>
            <div>
                <input type="submit" value="submit" name="submit" class="btn btn-warning mt-3">
            </div>
        </form>
        <div class="mt-4">
            <?php
                if (isset($_POST['submit'])){
                    $path = $_POST['path'];
                    ?><h4 class="text-primary">Result</h4><?php

                    $split = preg_split("/[\/.]/",$path);
                    $extn = end($split);
               
                    $file = basename($path,".$extn");

                    echo "Input: $path <br>";
                    echo "Output: $file";
                }
            ?>
        </div>
    </div>
</div>

</div>
<?php require_once("../lib/footer.php"); ?>