<?php require_once("../lib/common.php"); ?>
    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
        <?php
            $lis = $_POST["lis"];

            switch ($lis) {
                case 0:
                    echo "Welcome ",$_POST['name'];
                    break;
                case 1:
                    echo "How are you ", $_POST['name'],"?";
                    break;
                case 2:
                   echo "I'm doing well, Thank you";
                    break;
                case 3:
                    echo "Have a nice day";
                    break;
                case 4:
                    echo "Good-bye";
                    break;
                default:
                    echo "Good Night";
                    break;
            }
        ?>
    </div>
<?php require_once("../lib/footer.php"); ?>
    
