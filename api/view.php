<!DOCTYPE html>
<html>

<?php

include_once("config/config.php");

include("head.php");


?>

<body>

<?php
include("nav.php");
?>

<h1>Project Details</h1>

<?php

include_once("config/config.php");


if (isset($_GET["id"])) {
    $project_id = $_GET["id"];


    $sql = "SELECT * FROM projects WHERE projid=".$project_id."";
    $result = $conn->query($sql);
    $rowsProd = $result->fetch_assoc();

    
    $id = $rowsProd['projid'];
    $title   = $rowsProd['projtitle'];
    $budget = $rowsProd['projbudget'];
    $image = $rowsProd['projimg'];
    $startdate = $rowsProd['dstart'];
    $plannedfinishdate = $rowsProd['pdfinish'];
    $actualfinishdate = $rowsProd['dfinished'];
    $description = $rowsProd['projldesk'];
    $location = $rowsProd['projloc'];
    $ida = $id + 1;
    $idb = $id - 1;

    $wra = "";
    $wrz = "";
    $c = "between";

    if ($id == 1){
        $wra = "";
        $wrz = "<a href='view.php?id=".$ida."' class='btnh0' style='width: 120px; text-align: center;'>Next</a>";
        $c = "end";

    }
    else if( $id == 20){
        $wrz = "";
        $wra = "<a href='view.php?id=".$idb."' class='btnh0' style='width: 120px; text-align: center;'>Previous</a>";
        $c = "between";
    }
    else{
        $wrz = "<a href='view.php?id=".$ida."' class='btnh0' style='width: 120px; text-align: center;'>Next</a>";
        $wra = "<a href='view.php?id=".$idb."' class='btnh0' style='width: 120px; text-align: center;'>Previous</a>";
        $c = "between";
    }

                   

                 
    echo "<div class='vproj d-xl-flex'>

        <div class='vproj1 col-xl-4 my-5'>
        <img src='".$image."' width='100%' alt='project image'
            width='300px'>
        </div>


        <div class='vproj2 col-xl-7 mx-4'>
        <div class='cards-body'>
            <h5 class='d-flex justify-content-center' style='text-decoration: underline; font-size: 30px; margin-top: 30px;'>".$title."</h5>
            <br>
            <h5><strong>Location: ".$location."</strong></h5>
            <br>
            <div class='d-flex flex-xl-row flex-column justify-content-between'>
                <h5><strong>Budget: ".$budget."</strong></h5>
                <h5><strong>Stert Date: ".$startdate."</strong></h5>
                <h5><strong>Finished Date: ".$actualfinishdate."</strong></h5>
            </div>
            <br>
            <p class='card-tsext'>".$description."</p>
            
        </div>
        </div>

        </div>";

        echo"
        <div class='d-flex mx-4 justify-content-".$c."'>";
        echo $wra;
        echo $wrz;
        echo "</div>";
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 ;
} else {
    echo "Project ID not provided.";
}


?>

<?php
include("footer.php");
?>


</body>
</html>
