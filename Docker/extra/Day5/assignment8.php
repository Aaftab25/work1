<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4 ">
        <div>
            <div class="mb-5">
                <h1>PHP program that removes the whitespaces from a string</h1>
            </div>
            <form action="" method="post">
                <div class="mt-5">
                    <input type="text" name="str" id="str" placeholder="Enter Some String" class="form-control">
                </div>
                <div>
                    <input type="submit" value="Remove Space" name="submit" class="btn btn-primary px-5 mt-3">
                </div>
            </form>
        </div>
        <div class="mt-5">
           <?php 
                 if(isset($_POST['submit'])){
                    $str = $_POST['str'];

                    $ws_str = preg_replace("/\s/","",$str);

                    echo "Result: <span class='text-primary fs-5'> $ws_str</span>";
                 }
           ?>
        </div>
    </div>
</div>

<?php  require_once("../lib/footer.php"); ?>
