<?php require_once("../lib/common.php"); ?>

<!-- ../../Assignment4/Source/bmi_cal.php -->
<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-5 w-75 mx-auto">
        <div>
            <h2>Body Mass Index </h2>
        </div>
        <form action="" method="post">
            <div class="mt-4">
                <label for="">Weight</label>
                <div class="d-flex">
                    <input type="text" placeholder="Weight In Kilograms" maxlength="3" name="weight" id="weight" required class="form-control w-50"><span class="mt-2 ms-2">in Kilograms</span>
                </div>
            </div>
            <div class="mt-3">
                <label for="">Height</label>
                <div class="d-flex">
                    <input type="text" placeholder="Height In Meters" maxlength="4" name="height" id="height" required class="form-control w-50"><span class="mt-2 ms-2">in Meters</span>
                </div>
            </div>
            <div>
                <input type="submit" value="Check BMI" id="bmi" class="btn btn-warning mt-3">
            </div>
        </form>
    </div>
</div>

<script>
    $("#bmi").click(function() {

        var w = $("#weight").val();
        var h = parseInt($("#height").val());
        console.log(typeof(h));



        if (!isNaN(h) && Number.isInteger(10))  {
            alert("Height Not Float.. Enter Float Value");

        }

    })
</script>
<?php require_once("../lib/footer.php"); ?>