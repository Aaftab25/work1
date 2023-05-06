<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="d-flex border border-3 p-4 w-75 shadow">
        <div >
                <div class="mb-5">
                    <h1>Calculate The Difference Between Two Dates.</h1>
                </div>
            <form action="" method="post">
               
                <div class="">
                    <label for="">Start Date</label>
                    <input type="date" name="sdate" id="sdate" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="">End Date </label>
                    <input type="date" name="edate" id="edate" class="form-control">
                </div>
                <div class="mt-3">
                    <input type="submit" value="CHECK_DIFF" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div class="ms-5">
            <?php
                if(isset($_POST['submit'])){
                    $sdate = date_create($_POST['sdate']);
                    $edate = date_create($_POST['edate']);

                   $diff = date_diff($sdate,$edate);

                    echo $diff->format("%m Month %d Days");

                    
                }

            ?>
        </div>
    </div>
</div>
<?php  require_once("../lib/footer.php"); ?>
