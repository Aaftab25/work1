<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4 ">
        <div>
            <div class="mb-5">
                <h1> PHP program to remove nonnumeric characters except comma and dot</h1>
            </div>
            <form action="" method="post">
                <div class="mt-5">
                    <input type="text" name="msg" id="msg" placeholder="Enter Some data" class="form-control">
                </div>
                <div>
                    <input type="submit" value="Remove Non Numberic" name="submit" class="btn btn-primary px-5 mt-3">
                </div>
            </form>
        </div>
        <div class="mt-5">
           <?php 
                 if(isset($_POST['submit'])){
                    extract($_POST);
                    // $msg = $_POST['msg'];

                    $num = preg_replace("/[^0-9,-.]/","",$msg);

                    echo "Result: <span class='text-danger fs-5'> $num </span>";
                 }
           ?>
        </div>
    </div>
</div>

<?php  require_once("../lib/footer.php"); ?>
