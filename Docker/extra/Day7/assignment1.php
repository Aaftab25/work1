<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(1) Write a PHP script to remove comma(s) from the following numeric string.</h3>
        <p>Sample String: '2,54,38745.12' <br>
            Expected Output: 25438745.12</p>
    </div>
    <div class="border border-3 p-4">
        <form action="" method="post">
            <div>
                <input type="text" name="val1" placeholder="Enter Value" class="form-control " required>
            </div>
            <div>
                <input type="submit" value="Submit" name="submit" class="btn btn-info mt-3">
            </div>
        </form>
    </div>
    <div class="border border-3 p-4">
        <?php
            if(isset($_POST['submit'])){
                $val1 = $_POST['val1'];
                $rsult = str_replace(",","",$val1);

            ?><h4 class="text-primary">Result</h4><?php
                echo "Input: $val1 <br>";
                echo "Output: $rsult";
            }
        ?>
    </div>
</div>

</div>
<?php require_once("../lib/footer.php"); ?>