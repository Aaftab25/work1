<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>1. Create one form with some of the input boxes, and apply below functions of array on values of that input boxes.</h3>
    </div>
    <div class="border border-3 p-4">
        <form action="" method="post">
            <div>
                <input type="text" class="form-control mt-3" name="val1" placeholder="Enter Value 1" required>
                <input type="text" class="form-control mt-3" name="val2" placeholder="Enter Value 2" required>
                <input type="text" class="form-control mt-3" name="val3" placeholder="Enter Value 3" required>
            </div>
            <div>
                <input type="submit" value="Perform" class="mt-3 btn btn-primary" name="submit">
            </div>
        </form>
    </div>
    <div class="mt-3 border border-3 p-4">
        <?php
            if(isset($_POST['submit'])){
                $val1 = $_POST['val1'];
                $val2 = $_POST['val2'];
                $val3 = $_POST['val3'];

                $val = array($val1,$val2,$val3);
               


        ?>
        <div>
            <h3>Enter Value <?php echo " $val1, $val2, $val3"; ?> </h3>
            <label for="" class="fs-5">1. min()</label>
            <p> -- Minimum Value: <?php echo (min($val))  ?></p>
        </div>
        <div>
            <label for="" class="fs-5">2) max ()</label>
            <p> -- Maximum Value: <?php echo (max($val))  ?></p>
        </div>
        <div>
            <label for="" class="fs-5">3) count ()</label>
            <p> -- Count Value: <?php echo (count($val))  ?></p>
        </div>
        <div>
            <label for="" class="fs-5">4) reverse ()</label>
            <p> -- Reverse Value: <?php print_r (array_reverse($val))  ?></p>
        </div>
        <div>
            <label for="" class="fs-5">5) array_chunk ()</label>
            <p> -- Array Chunk Value: <?php print_r (array_chunk($val,2))  ?></p>
        </div>
        <div>
            <label for="" class="fs-5">6) serialize ()</label>
            <p> -- Serialize Value: <?php echo (serialize($val))  ?></p>
        </div>
        <div>
            <label for="" class="fs-5">7) array_unique ()</label>
            <p> -- Array Unique Value: <?php print_r (array_unique($val))  ?></p>
        </div>
        <div>
            <label for="" class="fs-5">8) array_keys /array_values</label>
            <p> -- Array Keys Value: <?php print_r (array_keys($val))  ?></p>
            <p> -- Array Values: <?php print_r (array_values($val))  ?></p>
        </div>
        <div>
            <label for="" class="fs-5">9) array_rand ()</label>
            <?php $rand_val = array_rand($val,2); ?>
            <p> -- Array Rand Value: <?php echo $val[$rand_val[0]]."<br>";   ?>
            -- Array Rand Value: <?php echo $val[$rand_val[1]];   ?></p>
        </div>
        <div>
            <label for="" class="fs-5">10) assort ()</label>
             <?php asort($val);
            foreach ($val as  $value) {
                echo "<br>Assort is ". $value;
            } ?>
        </div>
        <div>
            <label for="" class="fs-5">11) ksort ()</label>
            <?php 
            ksort($val);

            foreach ($val as $key => $value) {
                echo "<br> Ksort Key ".$key." Value ".$value;
            }
             ?>
        </div>

        <?php
            }
        ?>
    </div>

</div>
<?php require_once("../lib/footer.php"); ?>