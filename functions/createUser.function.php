<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

try {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user->PostUser($username, $email, $password);

    header("Location: ../pages/login.page.php");
    exit;
} catch (Exception $e) {
    die($e->getmessage());
}