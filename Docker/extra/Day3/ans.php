<?php require_once("../lib/common.php"); ?>

    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
        <?php
           $ans =   $_POST['exampleRadios'];
            if($ans == 'Reindeer'){
                echo $ans," is Correct";
            }else{
                echo "X Wrong Answer";
            }
        ?>
    </div>
<?php  require_once("../lib/footer.php"); ?>
