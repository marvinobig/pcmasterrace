<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();

try {
    $id = intval($_GET["id"]);
    $name = $_POST["name"];
    $price = floatval($_POST["price"]);
    $description = $_POST["description"];
    $image = $_POST["image"];

    $product->UpdateProduct($name, $description, $price, $image, $id);

    header("Location: ../pages/admin.page.php");
    exit;
} catch (Exception $e) {
    die($e->getmessage());
}