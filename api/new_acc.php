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
    $password = test_input($_POST["pss"]); // Hash the password
    $email = test_input($_POST["el"]);

    $sql1 = "SELECT * FROM logs";
    $result1 = $conn->query($sql1);

    $_SESSION['user_exists'] = false;
    
    
    if ($result1 && $result1->num_rows > 0) {
        $users1 = $result1->fetch_all(MYSQLI_ASSOC);  // Fetch all rows as associative arrays
        
        foreach ($users1 as $user1) {
            if (($user1['uname'] == $username || $user1['el'] == $email)) {
                $user_exists = true;
                // session for user exists
                $_SESSION["user_exists"] = true;

                echo "<script>alert('User alredy exists')</script>";


             
            }
            
        }
        if ($user_exists !== true){
                
                $sql = "INSERT INTO logs (uname, el, pss) VALUES ('$username', '$email', '$password')";
                $result = $conn->query($sql);
                
                if ($result) {
                        header("location: admin.php");
                        exit();
                    }
                else{
                    echo "<script>alert('Please try again')</script>";
                }

            }
        }

    }
    

    $conn->close();
?>




<!DOCTYPE html>
<html lang="en">
 
<head>
    <?php include("head.php");?>
    <title>Login Page</title>
</head>
 
<body>

    
    


<form action="new_acc.php" method="post">
<div class="login-box">
            <h1>New Account</h1>
            
            <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username"
            name="uname" value="" required>
            </div>
            
            <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Email"
            name="el" value="" required>
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="pss" value="" required>
            </div>
 
            
            <input class="button" type="submit"
                     name="new_account" value="Sign Up">
            <h4 class="">Or</h4>
            <a href="admin.php" class="button2">Sign In</a>
        </div>
    </form>


    









</body>
</html>