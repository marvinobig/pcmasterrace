<?php
include ("Connect.php");
//gets username from form//
if(isset($_POST["username"])){
    $username = $_POST["username"];

}
//uses information to find account within users table and delete//
$sql = "DELETE FROM users WHERE username = '$username'";
//takes user back to login page//
if(mysqli_query($con, $sql)){
    header("Location: ../LoginPage.html");
}

else
    
{
    echo mysqli_error($con);
}

?>