<?php require_once("../lib/common.php"); ?>
<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4 ">
        <h4> 3. Create a PHP program that prints your name, email address and department using the php functions . </h4>
    </div>
    <div class="border border-3 p-5 fs-4">

        <?php
        function details()
        {
            // using br to go next line
            echo "Name: Aaftab <br> Email: Aaftab@gmail.com <br> Department: PHPOPS";
        }

        details();
        ?>
    </div>
</div>

<?php require_once("../lib/footer.php"); ?>