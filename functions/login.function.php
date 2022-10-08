<?php
session_start();
include "Connect.php";

//gets information from form and puts them in variables//
if(isset($_POST["username"])){
    $username = $_POST["username"];
}

if(isset($_POST["password"])){
    $password = $_POST["password"];
}

//then looks for account using the variables//
$sql = "SELECT * FROM users WHERE username = 
'$username' and password = '$password'";

$result = mysqli_query($con, $sql);
//once account has been found the details are put in session variables and the user is taken to user page//
if(mysqli_num_rows($result) == 1){
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    header("Location: User.php");
}

else{
    header("Location: ../LoginPage.html"); 
}
?>