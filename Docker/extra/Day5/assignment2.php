<?php require_once("../lib/common.php"); ?>

    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
        <div class="border border-3 p-5">
        <div>
            <div>
                <h1 class="my-4">Program which accept Year from select box and display computed age based on the Selected Value.</h1>
            </div>
            <form action="" method="post">
                <div>
                    <select name="year" id="year" class="form-control">
                        <option value="">Select Year</option>
                        <?php

                            for ($i=1923; $i < date("Y"); $i++) { 
                                ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Calculate" name="submit" class="btn btn-outline-primary mt-3">
                </div>
            </form>
        </div>
        <div class="mt-5">
            <?php
            if (isset($_POST['submit'])){

                $year = $_POST['year'];
                $age = date("Y")-$year;
                echo "Age: <span class='text-primary'>$age</span>" ;
            }
                ?>
        </div>
        </div>
    </div>
    <?php  require_once("../lib/footer.php"); ?>

