<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(3) Write a PHP script to get the characters after the last '/' in an url.</h3>
        <p>Sample URL: 'http://www.example789.com/5478685231' <br>
            Expected Output: '5478685231'</p>
    </div>
    <div class="border border-3 p-4">
        <form action="" method="post">
            <div>
                <input type="text" name="url" class="form-control" placeholder="Enter URL" required>
            </div>
            <div>
                <input type="submit" name="submit" value="Output" class="btn btn-info mt-3">
            </div>
        </form>
    </div>
    <div class="border border-3 p-4">
        <?php
        if(isset($_POST['submit'])){
            $url = $_POST['url'];

            $arr_url = explode("/",$url);
            ?><h4 class="text-primary">Result</h4><?php

            echo end($arr_url);
        }

        ?>  
    </div>
</div>

</div>
<?php require_once("../lib/footer.php"); ?>