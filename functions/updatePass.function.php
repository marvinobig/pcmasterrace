<?php
include ("Connect.php");

//gets username and password from the form//
if(isset($_POST["username"])){
    $username = $_POST["username"];

}

if(isset($_POST["password"])){
    $password = $_POST["password"];
}

//uses above variables to update password using the username to find the account within the users table//
$sql = "UPDATE users SET password='$password' WHERE username = '$username'";
//takes the user to login page to login with updated details//
if(mysqli_query($con, $sql)){
    header("Location: ../LoginPage.html");

}

else{
    
    echo mysqli_error($con);

}

?>
    
    
    
    