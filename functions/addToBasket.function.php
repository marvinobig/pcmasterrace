<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();

try {
    if (!isset($_SESSION["username"])) {
        header("Location: ../pages/login.page.php");
        exit;
    }

    $username = $_SESSION["username"];
    $id = $_GET["id"];
    $basket->AddToBasket($id, $username);

    header("Location: ../pages/basket.page.php");
    exit;
} catch (Exeception $e) {
    die($e->getmessage());
}