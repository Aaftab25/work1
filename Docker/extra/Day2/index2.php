<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3 class="text-center">2. PHP program to display the following strings.</h3>
    </div>
    <div class="border border-3 p-4">
       <div>
        <p>
        Input :
        We've learned basic PHP. We are going to develop a basic application.
        'You are at C:\\'
        </p>
       </div>
        <?php
        echo nl2br("Output : \n We've learned basic PHP.\n We are going to develop a basic application.
                    'You are at C:\\'");
        ?>
    </div>
</div>


<?php require_once("../lib/footer.php"); ?>