<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(6) Write a PHP script to print the next character of a specific character.[Make it dynamic]</h3>
        <p>Sample character: 'a' <br>
            Expected Output: 'b'</p>
    </div>
    <div class="border border-3 p-4">
        <form action="" method="post">
            <div>
                <input type="text" name="chr" id="chr" maxlength="1" pattern="[a-zA-Z]" title="Only A to Z Character Allow" class="form-control my-3" required>
            </div>
            <div>
                <input type="submit" name="submit" value="Result" class="btn btn-info">
            </div>
        </form>
        <div class="mt-4">
            <?php
            if (isset($_POST['submit'])) {
                $chr = $_POST['chr'];
                $ascii = ord($chr) + 1;
            ?><h4 class="text-primary">Result</h4><?php

                if ($ascii == 91) {
                    echo "Input:  $chr <br>";
                    echo 'a';
                } else  if ($ascii == 123) {
                    echo "Input:  $chr <br>";
                    echo "This is last Value";
                } else {
                    echo "Input:  $chr <br>";
                    echo "Output: " . chr($ascii);
                }
            }
            ?>
        </div>
    </div>

</div>

</div>
<?php require_once("../lib/footer.php"); ?>