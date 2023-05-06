<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="d-flex border border-3 p-4">
        <div>
            <form action="" method="post">
                <div>
                    <label for="">Enter Date</label>
                    <input type="text" name="ch_date" id="ch_date" placeholder="YYYY-MM-DD">
                </div>
                <div>
                    <input type="submit" value="CHECK" name="submit">
                </div>
            </form>
        </div>
        <div>
            <?php
                if (isset($_POST['submit'])) {
                    $date = $_POST['ch_date'];

                    // echo $date;

                    $ch_date = preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[0-9]|[1-2][0-9]|3[0-1])$/",$date);

                    if ($ch_date){
                        echo "Correct $date";
                    }else {
                        echo "Not Correct";
                    }
                }
            ?>
        </div>
    </div>
</div>
<?php  require_once("../lib/footer.php"); ?>
