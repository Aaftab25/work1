<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <div>
            <div class="mb-5">
                <h1>PHP script to change month number to month name.</h1>
            </div>
            <form action="" method="post">
                <div>
                    <select name="month" id="month"  class="form-control">Select Month
                        <option value="" disabled selected>Select Month</option>
                        <?php
                            for ($i=1; $i <= 12; $i++) { ?>
                                <option value="<?php echo $i ?>" name="month_num"><?php echo $i ?></option>;
                        <?php    } ?>
                    </select>
                </div>
                <div >
                    <input type="submit" value="Get_Month" class="btn btn-info mt-5" name="submit">
                </div>
            </form>
        </div>
        <div class="ms-5 mt-5">
            Month Name:<label for="" class="ms-3 fs-5 text-primary"> 
            <?php
                if (isset($_POST['submit'])) {
                    if(!empty($_POST['month'])){

                        $month = $_POST['month'];
                        echo $month ;
                        $month_nm = date("F", mktime(0,0,0,$month));
                        echo $month_nm;
                    }
                    
                }
                
            ?>
             </label>
        </div>
    </div>
</div>

<?php  require_once("../lib/footer.php"); ?>
