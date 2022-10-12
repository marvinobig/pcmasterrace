<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();

try {
    $id = intval($_GET["id"]);
    $name = $_POST["name"];
    $price = floatval($_POST["price"]);
    $description = $_POST["description"];
    $imageData = file_get_contents($_FILES["image"]["tmp_name"]);
    $imageType = $_FILES["image"]["type"];

    if (!substr($imageType, 0, 5) === "image") {
        throw new Exception("The file you uploaded isn't an image");
    }

    $product->UpdateProduct($name, $description, $price, $imageData, $id);

    header("Location: ../pages/admin.page.php");
    exit;
} catch (Exception $e) {
    die($e->getmessage());
}