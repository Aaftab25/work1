<?php require_once("../lib/common.php"); ?>


<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-5 w-75 mx-auto">
        <div>
            <h2>Currency Conversions From Dollars To Euros</h2>
        </div>
        <form action="calculate.php" method="post">
            <div class="mt-5">
                <label for="">Enter Amount Of Dollars</label>
                <input type="number" name="dollar" class="form-control">
            </div>
            <div class="mt-3">
                <input type="submit" value="Calculate" class="btn btn-info">
            </div>
        </form>
    </div>
</div>
<?php require_once("../lib/footer.php"); ?>