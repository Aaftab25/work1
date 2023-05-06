<?php

require_once("../lib/common.php");
?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-5 w-75 mx-auto">
        <div class="mb-4">
            <h1>Find Pwer Of Two</h1>
        </div>
        <form action="" method="post">
            <div>
                <label for="">Enetr Number</label>
                <input type="number" name="power" id="power" class="form-control">
            </div>
            <div class="my-3">
                <input type="submit" value="calulate" name="calulate" class="btn btn-warning">
            </div>
        </form>
        <?php
        if (isset($_POST['calulate'])) {
            $power = $_POST['power'];

            if ($power < 0) {
                echo "Positive Number Required";
            } else {

                if ($power && (!($power & ($power - 1)))) {

                    echo "$power is Power of Two ";
                } else {
                    echo "$power is not Power of Two ";
                }
            }
        }
        ?>
    </div>
</div>
<?php require_once("../lib/footer.php"); ?>