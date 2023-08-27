<?php
session_start();

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
    $sql = "SELECT * FROM logs";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $users = $result->fetch_all(MYSQLI_ASSOC);  // Fetch all rows as associative arrays
        
        foreach ($users as $user) {
            if (($user['uname'] == $username || $user['el'] == $username) &&
                ($user['pss'] == $password)) {
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
}


?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <?php include("head.php");?>
    <title>Login Page</title>
</head>
 
<body>
<form action="admin.php" method="post">
<div class="login-box">
            <h1>Login</h1>
            
            <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username"
            name="uname" value="" required>
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="pss" value="" required>
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>












</body>
 
</html>