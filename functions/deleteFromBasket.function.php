<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

try {
    $id = $_GET["id"];
    $basket->RemoveFromBasket($id);

    header("Location: ../pages/basket.page.php");
    exit;
} catch (Exeception $e) {
    die($e->getmessage());
}