<?php
include("Connect.php");
session_start();
//sets session variable to variable//
If(isset($_SESSION["username"])){
$username = $_SESSION["username"];
}

//takes id from dynamic link//
$id = $_GET["ID"];
$sql = "SELECT * FROM products WHERE ID = '". 
    $id . "' ";

//inserts variable data into basket columns//
$sql = "INSERT INTO basket (ProdID, username) VALUES ('$id', '$username')";
//takes user to basket page//
if (mysqli_query($con, $sql)){
header("Location: Basket.php");
}
else{
    echo "Error: " . mysqli_error($con);
} 

?>

