<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

try {
    $username;

    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
    } else {
        header("Location: ../pages/login.page.php");
        exit;
    }

    $id = $_GET["id"];
    $basket->AddToBasket($id, $username);

    header("Location: ../pages/basket.page.php");
    exit;
} catch (Exeception $e) {
    die($e->getmessage());
}