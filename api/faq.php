<!-- projects preview containers -->

<?php

include_once("config/config.php");

include("head.php");


include("nav.php");

?>



<?php




// Fetch projects from the database
$sql = "SELECT * FROM faq";
$result = $conn->query($sql);
$rowsProd = $result->fetch_assoc();


?>


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">FAQ</h1>
        </div>
    </div>


    <div class='accordion' id="accord">


    <?php


    if ($result-> num_rows > 0) {
        do {
            $id = $rowsProd['faqid'];
            $question = $rowsProd['faqques'];
            $answer = $rowsProd['faqans'];

            $tf = "false";
            $cl = "";
            $cd = "collapsed";


            if ($id == 1){
                $tf = "true";
                $cl = "show";
                $cd = "";
            }
            else if ($id !== 1){
                $tf = "false";
                $cl = "";
                $cd = "collapsed";
            }
            
        
        echo "
            <div class='accordion-item' id='".$id."'>
                <h2 class='accordion-header'>
                <button class='accordion-button ".$cd."' type='button' data-bs-toggle='collapse' 
                data-bs-target='#collapse".$id."' aria-expanded='".$tf."' 
                aria-controls='collapse".$id."'>
                    ".$question."
                </button>
                </h2>
                <div id='collapse".$id."' class='accordion-collapse collapse ".$cl."' 
                aria-labelledby='".$id."' data-bs-parent='#accord'>
                <div class='accordion-body'>
                    ".$answer."
                </div>
                </div>
            </div>";
        

        } while ($rowsProd = $result->fetch_assoc());
    }

    else {
        echo "Query failed!";
    } 

    ?>
    </div>
</div>


<?php
include("footer.php");

include("scr.php");
?>