<?php
include ("Connect.php");
//gets id from dynamic link//
$id = $_REQUEST["ID"];
$sql = "SELECT * FROM basket WHERE prodID = '". 
    $id . "' ";
//uses information to find basket data using id//
$sql = "DELETE FROM basket WHERE prodID = '$id'";
//once deleted, the user is taken to basket page to view results//
if(mysqli_query($con, $sql)){
    header("Location: Basket.php");
}

else
    
{
    echo mysqli_error($con);
}

?>