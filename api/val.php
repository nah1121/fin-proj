<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('head.php');
    ?>
</head>

<?php
 
include_once('config/config.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["uname"]);
    $password = test_input($_POST["pss"]);
    
    
    $sql = "SELECT * FROM logs WHERE uname = '$username' OR el = '$username'";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user['pss'] == $password) {
            $_SESSION["id"] = $user['ids'];
            header("location: index.php");
            exit();
        }
    }
    
    // If login fails
    $_SESSION["login_error"] = true;
    header("location: admin.php");
    exit();
}

 
?>