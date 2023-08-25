<!-- projects preview containers -->

<?php

include_once("config/config.php");

include("head.php");


include("nav.php");

?>




<div class="sorting-options">
    <label for="sort-key">Sort By:</label>
    <select id="sort-key" name="sort-key">
        <option value="name">Name</option>
        <option value="budget">Budget</option>
        <option value="time">Time Taken</option>
    </select>
    
    <label for="sort-order">Sort Order:</label>
    <select id="sort-order" name="sort-order">
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select>
    
    <button id="sort-button">Sort</button>
</div>







<?php


class Project {
    public $name;
    public $budget;
    public $startDate;
    public $endDate;
    public $desk;
    public $id;
    public $img;
    public $loc;

    public function __construct($name, $budget, $startDate, $endDate, $desk, $id, $img, $loc) {
        $this->name = $name;
        $this->budget = $budget;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->desk = $desk;
        $this->id = $id;
        $this->img = $img;
        $this->loc = $loc;
    }
}

// Fetch projects from the database
$sql = "SELECT projtitle, projbudget, dstart, dfinished, projsdesk, projid, projimg, projloc FROM projects";
$result = $conn->query($sql);

$projects = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $projects[] = new Project($row["projtitle"], $row["projbudget"], $row["dstart"], $row["dfinished"], $row["projsdesk"], $row["projid"], $row["projimg"], $row["projloc"]);
    }
}

// Sorting functions
function sortByAlphabet($a, $b) {
    return strcmp($a->name, $b->name);
}

function convertBudgetToNumeric($budgetString) {
    // Remove commas and non-numeric characters
    return (float) preg_replace("/[^0-9.]/", "", $budgetString);
}

function sortByBudget($a, $b) {
    $budgetA = convertBudgetToNumeric($a->budget);
    $budgetB = convertBudgetToNumeric($b->budget);
    
    if ($budgetA === $budgetB) {
        return 0;
    }
    return ($budgetA < $budgetB) ? -1 : 1;
}

function sortByTimeTaken($a, $b) {
    $timeTakenA = strtotime($a->endDate) - strtotime($a->startDate);
    $timeTakenB = strtotime($b->endDate) - strtotime($b->startDate);
    return $timeTakenA - $timeTakenB;
}

// Function to convert seconds to years, months, and days
function secondsToApproximateTime($seconds) {
    $years = floor($seconds / (365 * 24 * 60 * 60));
    $seconds -= $years * 365 * 24 * 60 * 60;
    
    $months = floor($seconds / (30 * 24 * 60 * 60));
    $seconds -= $months * 30 * 24 * 60 * 60;
    
    $days = floor($seconds / (24 * 60 * 60));
    
    $timeString = '';
    if ($years > 0) {
        $timeString .= "$years years";
    }
    if ($months > 0) {
        if ($timeString !== '') {
            $timeString .= ", ";
        }
        $timeString .= "$months months";
    }
    if ($days > 0 || $timeString === '') {
        if ($timeString !== '') {
            $timeString .= ", ";
        }
        $timeString .= "$days days";
    }
    
    return $timeString;
}


// Sorting options
$sortKey = isset($_GET['sortKey']) ? $_GET['sortKey'] : 'name';
$order = isset($_GET['order']) ? $_GET['order'] : 'asc';

// Choose sorting function based on the sortKey
if ($sortKey === 'name') {
    $sortFunction = 'sortByAlphabet';
} elseif ($sortKey === 'budget') {
    $sortFunction = 'sortByBudget';
} elseif ($sortKey === 'time') {
    $sortFunction = 'sortByTimeTaken';
}

// Perform sorting
usort($projects, $sortFunction);

// Reverse the order if descending is selected
if ($order === 'desc') {
    $projects = array_reverse($projects);
}
?>


<div class="contp d-flex flex-column mx-auto" style="max-width: 1500px;">
<div class="proj-cont">
    
    <?php
// Print the sorted projects
foreach ($projects as $project) {
    

    $id = $project->id;
    $title   = $project->name;
    $budget = $project->budget;
    $image = $project->img;
    $time = secondsToApproximateTime(strtotime($project->endDate) - strtotime($project->startDate));
    $sdescription = $project->desk;
    

    echo " 
    
    <div class='card proj' style='width: 18rem; margin-top: 50px;'>
    <img src='".$image."' class='card-img-top' alt='project image' width='300px'>
    <div class='card-body'>
        <h5 class='card-title' style='text-decoration: underline;'>".$title."</h5>
        <p class='card-text'>".$sdescription."</p>
        <h5><strong>Time: ".$time."</strong></h5>
        <h5><strong>Budget: ".$budget."</strong></h5>
        <a href='view.php?id=".$id."' class='btnh' style='width: 100px; text-align: center; justify-content: center;'>View</a>
    </div>
    </div>";    



}

?>
</div>
      </div>



<!-- Add JavaScript to handle sorting -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const sortButton = document.getElementById("sort-button");
    sortButton.addEventListener("click", function() {
        const sortKey = document.getElementById("sort-key").value;
        const sortOrder = document.getElementById("sort-order").value;
        
        // Redirect to the same page with sorting parameters
        window.location.href = `portfolio.php?sortKey=${sortKey}&order=${sortOrder}`;
    });
});
</script>






<?php
include("footer.php");

include("scr.php");
?>