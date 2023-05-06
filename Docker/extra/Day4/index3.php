<?php require_once("../lib/common.php"); 
    $gerr = '';
?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-lg-6 ">
            <form action="" method="post" class="form-control p-4">
                <div>
                    <h1>Form</h1>
                </div>
                <div class="mt-3">
                    <label for="">Full Name: </label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mt-3">
                    <label for="">Username: </label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="mt-3">
                    <label for="">Email: </label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="mt-3">
                    <label for="">Gender: </label>
                    <div class="form-check"><input type="radio" name="gender" value="male" class="form-check-input "><label for="">Male</label></div>
                    <div class="form-check">
                        <input type="radio" name="gender" value="Female" class="form-check-input "><label for="">Female</label>
                    </div>
                 <?php echo $gerr; ?>
                </div>
                <div class="mt-3">
                    <label for="">Birth Date: </label>
                    <select name="year" id="year" required>
                        <option value="year" disabled selected >Select Year</option>
                    </select>
                    <select name="month" id="month" required>
                        <option value="month" disabled selected >Select Month</option>
                    </select>
                    <select name="date" id="date" required>
                        <option value="d" disabled selected >Select Date</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="">Hobby: </label>
                    <div class="form-check"><input type="Checkbox" name="hobby[]" value="Cricket" class="form-check-input"><label for="">Cricket</label></div>
                    <div class="form-check"><input type="Checkbox" name="hobby[]" value="Vollyboll" class="form-check-input"><label for="">Vollyboll</label></div>
                    <div class="form-check"><input type="Checkbox" name="hobby[]" value="Carrom" class="form-check-input"><label for="">Carrom</label></div>
                </div>
                <div class="d-flex justify-content-center">
                    <input type="Submit" value="Submit" id="sub" name="sub" class="btn btn-danger mt-5">
                    <input type="reset" value="Reset" class="btn btn-warning mt-5 ms-3">
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-6" id="data">
            <?php

            if (isset($_POST['sub'])) {

                extract($_POST);
                // $name = $_POST['name'];
                // $user = $_POST['user'];
                // $email = $_POST['email'];
                // $gender = $_POST['gender'];
                // $year = $_POST['year'];
                // $month = $_POST['month'];
                // $date = $_POST['date'];
                
                ?>
                <div class="border border-3 p-5">
                    <div>
                        <label for="" class="w-25">Name:</label>
                        <label for="" class="w-25"><?php echo $name; ?></label>
                    </div>
                    <div>
                        <label for="" class="w-25">Username:</label>
                        <label for="" class="w-25"><?php echo $user; ?></label>
                    </div>
                    <div>
                        <label for="" class="w-25">Email:</label>
                        <label for="" class="w-25"><?php echo $email; ?></label>
                    </div>
                    <div>
                        <label for="" class="w-25">Gender:</label>
                        <label for="" class="w-25"><?php echo $gender; ?></label>
                    </div>
                    <div>
                        <label for="" class="w-25">Birth Date:</label>
                        <label for="" class="w-25"><?php echo "$date/ $month /$year"; ?></label>
                    </div>
                    <div>
                        <label for="" class="w-25">Hobby:</label>
                        <label for="" class="w-25">
                            <?php foreach ($_POST['hobby'] as $value) {
                                                        echo "$value,";
                                                    }                
                            ?> 
                        </label>
                    </div>

                </div>
                <?php
                 if (!isset($_POST['gender']) == -1) {
                    $gerr =  "<p class='text-danger'>Please select gender </p>";
                }

                 }
                 ?>
        </div>
    </div>
    <script>


//----------------------------Year --------------------------------------------------
        let year = '';
        for (let y = 1975; y <= new Date().getFullYear(); y++) {
            // console.log(y);
            year += `<option value="${y}" name="year">${y}</option>`;
        }
        $("#year").append(year);

        $("#year").click(function() {
            year = $(this).val();
            console.log(year);
        })
//----------------------------month --------------------------------------------------

        var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
        let mon = '';
        for (const key in month) {
            monthval = parseInt(key) + 1;
            mon += `<option value="${monthval}" name="month">${month[key]}</option>`
        }
        $("#month").append(mon);

        $("#month").click(function() {
            month = $("#month").val();

        })
//----------------------------Day --------------------------------------------------
        $("#date").empty();

        let day = '';
        for (let d = 1; d <= 31; d++) {
            day += `<option value="${d}" name="date">${d}</option>`;
        }
        $("#date").append(day);

        $("#date").click(function() {
            select_day = $(this).val();
        })
//----------------------------Gender Validation --------------------------------------------------
        // for (let rb = 0; rb < gender.length; rb++) {
        //     if(gender[rb == false]) {
        //         genderErr = "Please select gender";
        //         $("gerr").text(genderErr);
        //     }
        // }



    </script>
</div>

<?php require_once("../lib/footer.php"); ?>