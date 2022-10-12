<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

try {
    $name = $_POST["name"];
    $price = floatval($_POST["price"]);
    $description = $_POST["description"];
    $image = $_POST["image"];

    $product->PostProduct($name, $description, $price, $image);

    header("Location: ../pages/admin.page.php");
    exit;
} catch (Exception $e) {
    die($e->getmessage());
}