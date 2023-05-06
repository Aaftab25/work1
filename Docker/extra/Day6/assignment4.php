<?php require_once("../lib/common.php"); ?>

    <div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
        <div class="border border-3 p-4">
            <h3>(4) Below is serialize string, Display Department, name and salary Who has more than 10,000 salary</h3>
            <p>a:3:{s:3:"PHP";a:3:{i:0;a:2:{s:4:"name";s:3:"Jay";s:6:"salary";i:8000;}i:1;a:2:{s:4:"name";s:3:"Raj";s:6:"salary";i:15000;}i:2;a:2:{s:4:"name";s:5:"Mihir";s:6:"salary";i:12000;}}s:4:"Flex";a:1:{i:0;a:2:{s:4:"name";s:5:"Vijay";s:6:"salary";i:14000;}}s:6:"System";a:1:{i:0;a:2:{s:4:"name";s:6:"Kishan";s:6:"salary";i:5000;}}}</p>
        </div>
        <div class="border border-3 p-4">
        <?php
        $serialize_data = 'a:3:{s:3:"PHP";a:3:{i:0;a:2:{s:4:"name";s:3:"Jay";s:6:"salary";i:8000;}i:1;a:2:{s:4:"name";s:3:"Raj";s:6:"salary";i:15000;}i:2;a:2:{s:4:"name";s:5:"Mihir";s:6:"salary";i:12000;}}s:4:"Flex";a:1:{i:0;a:2:{s:4:"name";s:5:"Vijay";s:6:"salary";i:14000;}}s:6:"System";a:1:{i:0;a:2:{s:4:"name";s:6:"Kishan";s:6:"salary";i:5000;}}}';

          $data =  unserialize($serialize_data);
        //   print_r($data);

          foreach($data as $key => $value){
            //  print_r ($value);
             foreach ($value as $keys => $values) {
                // print_r ($values);
            //    print_r ( $value);
            if($values['salary'] > 10000){
                echo  $key.": ". $values['name']." as ".$values['salary']."<br>";
            }
                
            }
          }
        ?>
        </div>
        <?php
         
        ?>

    </div>
    <?php  require_once("../lib/footer.php"); ?>
