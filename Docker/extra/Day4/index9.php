<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-lg-6 ">
            <form action="" method="post" class="form-control p-4">
                <div>
                    <h1>Form</h1>
                </div>
                <div class="mt-3">
                    <label for="">Email: </label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="">Host Name: </label>
                    <input type="text" name="hname" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="">Telephone Number </label>
                    <input type="text" name="phone" maxlength="10" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="">IP Address: </label>
                    <input type="text" name="ip" class="form-control">
                </div>

                <div class="d-flex justify-content-center">
                    <input type="submit" value="Submit" name="data" class="btn btn-danger mt-5">
                    <input type="reset" value="Reset" class="btn btn-warning mt-5 ms-3">
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-6" id="data">
            <?php

if(isset($_POST['data'])){
    $email = $_POST['email'];
    $hname = $_POST['hname'];
    $phone = $_POST['phone'];
    $ip = $_POST['ip'];
    
?>

            <div class="border border-3 p-5">
                <div>
                    <label for="" class="fs-3"> Email</label>
                    <label for="" class="text-danger">
                    <?php   
                        if(!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z]+\.+[a-zA-Z]{2,5}$/",$email)){
                            echo nl2br("Enter valid Email Id \n");
                        } else {?></label>
                    <label for="" class="fs-3"><?php echo "$email";} ?></label>
                </div>
                <div>
                    <label for="" class="fs-3">Host Name: </label>
                    <label for="" class="text-danger">
                        <?php
                            if (!preg_match("/^([a-zd](-[a-zd])*)(.([a-zd](-[a-zd])*))*$/i",$hname)){
                                echo nl2br("Host Name is not correct \n");
                            }else {
                        ?>
                    </label>
                    <label for="" class="fs-3"><?php echo $hname; }?></label>
                </div>
                <div>
                    <label for="" class="fs-3">Telephone Number </label>
                    <label for="" class="text-danger">
                        <?php
                             if(!preg_match("/^[6-9]{1}[0-9]{9}$/",$phone)){
                                echo nl2br("Number format not is correct\n");
                            } else {
                        ?>
                    </label>
                    <label for="" class="fs-3"><?php echo $phone; }?></label>
                </div>
                <div>
                    <label for="" class="fs-3">IP Address: </label>
                    <label for="" class="text-danger">
                        <?php                       
                            if(!filter_var($ip, FILTER_VALIDATE_IP)){
                                echo nl2br("Ip Address Not  Is Correct");
                            } else{
                        ?>
                    </label>
                    <label for="" class="fs-3"><?php echo $ip; }?></label>
                </div>
            </div>
        </div>
    </div>
    <?php
}

?>
</div>
<?php  require_once("../lib/footer.php"); ?>
