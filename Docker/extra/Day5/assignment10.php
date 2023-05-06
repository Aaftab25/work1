<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4 ">
        <div>
            <div class="mb-5">
                <h1> PHP program to remove new lines (characters) from a string</h1>
            </div>
            <form action="" method="post">
                <div class="mt-5">
                    <textarea type="text" name="line" id="line" placeholder="Enter Some data" class="form-control"></textarea>
                </div>
                <div>
                    <input type="submit" value="Remove New Line" name="submit" class="btn btn-primary px-5 mt-3">
                </div>
            </form>
        </div>
        <div class="mt-5">
           <?php 
                 if(isset($_POST['submit'])){
                   $line = $_POST['line'];

                   $rm_line = preg_replace("/[\n]/"," ",$line);

                   echo $rm_line;
                 }
           ?>
        </div>
    </div>
</div>
<?php  require_once("../lib/footer.php"); ?>
