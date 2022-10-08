<?php
include ("Connect.php");
//gets information from registration form
if(isset($_POST["username"])){
$username = $_POST["username"];
}
if(isset($_POST["email"])){
$email = $_POST["email"];
}
if(isset($_POST["password"])){
$password = $_POST["password"];
}
//inserts information into the users table
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if (mysqli_query($con, $sql)){
header("Location: ../LoginPage.html");
}
else{
echo "Error: " . mysqli_error($con);
} 

?>
