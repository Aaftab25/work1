<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-5 w-75 mx-auto">
        <div>
            <h1>Find the Square Root</h1>
        </div>
        <form action="" method="post">
            <div>
                <label for="">Square Root</label>
                <input type="number" name="sqr" class="form-control mt-2">
            </div>
            <div>
                <input type="submit" value="Check" name="chek" class="btn btn-outline-warning mt-3">
            </div>
        </form>

        <div class="mt-4">

            <?php
            if (isset($_POST['chek'])) {

                echo "Square Root is: ", sqrt($_POST['sqr']);
            }
            ?>
        </div>
    </div>
</div>
<?php require_once("../lib/footer.php"); ?>