<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>1. Select Opration To Perform Arithmetic, Square-Root, Square & Factorial Task</h3>
    </div>
    <div class="border border-3 p-5  mx-auto">
    <form action="" method="post" >
        <div>
            <select name="task" id="task" class="form-control">
                <option value="select" hidden>Select Operation</option>
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
                <option value="modulus">Modulus</option>
                <option value="square-root">Square-root</option>
                <option value="square">Square</option>
                <option value="Factorial">Factorial operation</option>
            </select>
        </div>
        <div class="mt-2">
            <input type="number" name="value1" id="val1"  placeholder="Enter Value 1" class="form-control" required>
            <input type="number" name="value2" id="val2"  placeholder="Enter Value 2" class="form-control mt-2 d-block" required>
        </div>
        <div class="mt-5">
            <input type="submit" name="submit" class="btn btn-info px-5" value="Calculate">
        </div>
    </form>
    <div class="mt-5 border border-info p-3 w-25">
                <?php
                if (isset($_POST['submit'])){
                    echo "Task: ",$_POST['task'],"<br>";
                    echo "Value 1 = ",$_POST['value1'],"<br>";
                    echo "Value 2 = ",$_POST['value2'],"<br></br>";


                    $task = $_POST['task'];
                    $val1 = $_POST['value1'];
                    $val2 = $_POST['value2'];

                    switch ($task) {
                        case 'addition':
                           echo "Addition = ",$val1+$val2;
                            break;
                        case 'subtraction':
                            echo "Subtraction = ",$val1-$val2;
                            break;
                        case 'multiplication':
                            echo "Multiplication = ",$val1*$val2;
                            break;
                        case 'division':
                            echo "Division = ",$val1/$val2;
                            break;
                        case 'modulus':
                            echo "Division = ",$val1%$val2;
                            break;
                        case 'square-root':
                            echo "Square-Root = ",sqrt($val1);
                            break;
                        case 'square':
                            echo "Square = ",$val1*$val1;
                            break;
                        case 'Factorial':
                            $fact = 1;
                            for ($i=$val1; $i > 1; $i--) { 
                                # code...
                                $fact = $fact * $i;
                            }
                            echo "Factorial = ",$fact;
                            break;
                      
                        default:
                            # code...
                            break;
                    }
                }
                ?>
            </div>
</div>
</div>

<script>
    $("#task").click(function() {
        var task = $(this).val();

        if (task == 'square-root' || task == 'square' || task == 'Factorial') {
            $("#val2").addClass("d-none");
        } else {
            console.log(task);
            $("#val2").removeClass("d-none");
        }
    })
</script>
<?php require_once("../lib/footer.php"); ?>