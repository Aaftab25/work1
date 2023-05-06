<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>(9) Write a PHP script to find first character that is different between two strings.</h3>
        <p>String1: 'volleyball'<br>
            String2: 'volleyboll'<br>
            Expected Result: First difference between two strings at position {value}: "a" vs "o"</p>
    </div>
    <div class="border border-3 p-4">
        <form action="" method="post">
            <div>
                <input type="text" name="str1" class="form-control" placeholder="Enter String Value 1" required>
                <input type="text" name="str2" class="form-control mt-3" placeholder="Enter String Value 2 " required>
            </div>
            <div>
                <input type="submit" value="Submit" name="submit" class="btn btn-info mt-3" name="submit">
            </div>
        </form>
    </div>
    <div class="border border-3 p-4">
        <?php 
        if (isset($_POST['submit'])){
            $str1 = $_POST['str1'];
            $str2 = $_POST['str2'];
        
            $position = strspn($str1^$str2, "\0");
        ?>
            <h4 class="text-primary">Output</h4>
        <?php
            echo "String1: $str1 <br>";
            echo "String2: $str2 <br>";
            printf(" First difference between two strings at position %u: %s vs %s",$position,$str1[$position],$str2[$position]);
        }
        ?>
    </div>
</div>

</div>
<?php require_once("../lib/footer.php"); ?>