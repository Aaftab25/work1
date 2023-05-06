<?php require_once("../lib/common.php"); ?>

<div class="col-12 col-md-4 col-lg-8 mb-5  mx-auto mt-5 pt-5">
    <div class="border border-3 p-4">
        <h3>2. Create one PHP script, in that create of the array as below</h3>
    </div>
   <div class="border border-3 p-4">
    <?php
    $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", 
    "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", 
    "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", 
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", 
    "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

    print_r($ceu)
    ?>
    </div> 
    <div class="border border-3 p-4">

       <div class="mt-3">
           <p>(a) Display the first element of the above array</p>
           <?php 
        foreach ($ceu as $key => $value) {
            echo $value."<br> ";
        }
        ?>
        </div>
        <div class="mt-3">
            <p >(b) Display the capital and country name from the above array $ceu.</p>
            <?php 
        foreach ($ceu as $key => $value) {
            echo "Capital <span class='text-danger'>".$key."</span>  Country Name <span class='text-danger'>".$value."</span><br> ";
        }
        ?>
        </div>
        <div class="mt-3">
            <p>(c) Sort the list by the name of the country</p>
            <?php
                asort($ceu);

                foreach($ceu as $value){
                    echo $value."<br>";
                }
            ?>
        </div>
</div>

</div>
<?php require_once("../lib/footer.php"); ?>