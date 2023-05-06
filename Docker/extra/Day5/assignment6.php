<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <div>
            <div class="mb-5">
                <h1>PHP program that checks if a string contains another string.</h1>
            </div class="mt-5">
            <form action="" method="post">
                <div>
                    <input type="text" name="str1" class="form-control mt-3" placeholder="Enter String Value 1">
                </div>
                <div>
                    <input type="text" name="str2" class="form-control mt-3" placeholder="Enter String Value 2">
                </div>
                <div>
                    <input type="submit" value="submit" name="submit" class="btn btn-primary px-5 mt-3">
                </div>
            </form>
        </div>
        <div class="mt-5">
            <?php 
                if (isset($_POST['submit'])){
                    $str1 = $_POST['str1'];
                    $str2 = $_POST['str2'];

                    // echo "$str1, $str2";

                    if (str_contains($str1,$str2)) {
                        echo  "String Contains is:<span class='text-primary fs-5'> $str2</span>";
                    }
                }
            ?>
        </div>
    </div>
</div>

<?php  require_once("../lib/footer.php"); ?>
