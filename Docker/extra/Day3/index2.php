<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-5 w-75 mx-auto">
        <div>
            <h1>Select Option to Get Feedback</h1>
        </div>
        <form action="msg.php" method="POST">
            <div class="d-flex mt-5 w-50">
                <label for="" class="w-50 mt-2"> Enter Your Name: </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mt-2">
                <select name="lis" id="lis" class="form-control w-50">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="mt-2">
                <input type="submit" value="Submit" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>
</main>
<?php require_once("../lib/footer.php"); ?>