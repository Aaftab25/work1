<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-3 pt-5">
    <div class="border border-info p-4 mb-5">
        <h3>4. Create a simple Registration and Login form using HTML5. Validation should be available. </h3>
    </div>
    <div class="d-flex">
        <div class="w-50 me-2  p-4 border border-info shadow">
            <div class="text-center mb-2">
                <h1 class="pb-5">Registration Form</h1>
            </div>
            <form action="" method="POST" >
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" pattern="[a-zA-Z]{1,32}" title="Number Not Allow" required>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">Last Name</label>
                    <input type="text" class="form-control mt-2" id="lname" pattern="[a-zA-Z]{1,32}" title="Number Not Allow" name="lname" required>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">Email Address</label>
                    <input type="text" pattern="[a-z0-9.-]+@[a-z0-9.-]+\.[a-z]{2,5}$" title="Enter Email Format" class="form-control mt-2" id="email" name="email" required>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">Username</label>
                    <input type="text" class="form-control mt-2" id="user" pattern="[A-Za-z]+[0-9]{1,32}" title="Ente Name" name="user" required>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">Password</label>
                    <input type="password" class="form-control mt-2" id="pass" pattern="[a-zA-Z0-9]{8,32}" name="pass" required>
                </div>
                <p id="passErr" class="ms-5 ps-5 text-danger"></p>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">Date of Birth</label>
                    <input type="date" class="form-control mt-2" id="dob" name="dob" required>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">Website</label>
                    <input type="text" class="form-control mt-2" id="web" name="web" required>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">Phone number</label>
                    <input type="number" class="form-control mt-2" id="phone" pattern="[0-9]{10}" title="Number Must be 10 Digit" name="phone" required>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">Address</label>
                    <textarea type="text" class="form-control mt-2" id="addres" name="addres" required></textarea>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">Post Code</label>
                    <input type="number" class="form-control mt-2" id="postcode" name="postcode" pattern="[0-9]{5,8}" title="Enter Valid Postcod" required>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">City</label>
                    <input type="text" class="form-control mt-2" id="city" name="city" pattern="[A-Za-z]{1,32}" title="Enter City Name " required>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">State</label>
                    <input type="text" class="form-control mt-2" id="state" name="state" pattern="[A-Za-z]{1,32}" title="Enter State Name" required>
                </div>
                <div class="d-flex">
                    <label for="" class="w-25 mt-2">Country</label>
                    <input type="text" class="form-control mt-2" id="country" name="country" pattern="[A-Za-z]{1,32}" title="Enter Country Name" required>
                </div>
                <div class="d-flex justify-content-center mt-3 text-center">
                    <input type="submit" class="btn btn-outline-info px-4" name="submit" value="Submit" required>
                </div>
            </form>
        </div>
        <div>
        <?php 
            if (isset($_POST['submit'])){
                ?>
            <table class="table table-striped table-responsive border ms-4">
                <tr>
                    <th>Name</th>
                    <td><?php echo $_POST['fname']," ", $_POST['lname']; ?></td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td><?php echo $_POST['email']; ?></td>
                </tr>
                <tr>
                    <th>UserName</th>
                    <td><?php echo $_POST['user']; ?></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><?php echo $_POST['pass']; ?></td>
                </tr>
                <tr>
                    <th>Date Of Birth</th>
                    <td><?php echo $_POST['dob']; ?></td>
                </tr>
                <tr>
                    <th>Website</th>
                    <td><?php echo $_POST['web']; ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo $_POST['phone']; ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo $_POST['addres']; ?></td>
                </tr>
                <tr>
                    <th>Postcode</th>
                    <td><?php echo $_POST['postcode']; ?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><?php echo $_POST['city']; ?></td>
                </tr>
                <tr>
                    <th>State</th>
                    <td><?php echo $_POST['state']; ?></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><?php echo $_POST['country']; ?></td>
                </tr>
            </table>
           <?php }
            ?>
        </div>
    </div>
</div>




<?php require_once("../lib/footer.php"); ?>