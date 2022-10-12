<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

try {
    $id = $_GET["id"];
    $product->DeleteProduct($id);

    header("Location: ../pages/admin.page.php");
    exit;
} catch (Exeception $e) {
    die($e->getmessage());
}