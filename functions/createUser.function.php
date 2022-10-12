<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

try {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $admin = boolval($_POST["admin"]);

    $user->PostUser($username, $email, $password, $admin);

    header("Location: ../pages/login.page.php");
    exit;
} catch (Exception $e) {
    die($e->getmessage());
}