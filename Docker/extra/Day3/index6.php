<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-5 w-75 mx-auto">
        <div class="mb-5">
            <h1>What is this animal?</h1>
        </div>
        <form action="ans.php" method="post">
            <div class="d-flex w-75 border border-3">
                <div class=" ">
                    <img src="<?php echo SITE_URL ?>image/Reindeer.jpg" class="w-100" alt="reindeer">
                </div>
                <div class="w-100 ms-5 my-auto">
                    <label class="form-check-label w-75 mt-2" for="exampleRadios1">
                        Reindeer
                    </label>
                    <input class="form-check-input mt-2" type="radio" name="exampleRadios" id="exampleRadios1" value="Reindeer"><br>
                    <label class="form-check-label w-75 mt-2" for="exampleRadios2">
                        Fallow deer
                    </label>
                    <input class="form-check-input mt-2" type="radio" name="exampleRadios" id="exampleRadios2" value="Fallow deer"><br>
                    <label class="form-check-label w-75 mt-2" for="exampleRadios2">
                        Moose
                    </label>
                    <input class="form-check-input mt-2" type="radio" name="exampleRadios" id="exampleRadios2" value="Moose"><br>
                    <label class="form-check-label w-75 mt-2" for="exampleRadios2">
                        Horse
                    </label>
                    <input class="form-check-input mt-2" type="radio" name="exampleRadios" id="exampleRadios2" value="Horse"><br>
                </div>
            </div>
            <div class="mt-5 ">
                <input type="submit" value="Submit" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
</div>
<?php require_once("../lib/footer.php"); ?>