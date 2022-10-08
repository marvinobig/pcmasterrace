<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();

try {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($user->GetUser($username, $password)) {
        $currUser = $user->GetUser($username, $password);
        $_SESSION["user_id"] = $currUser[0]["ID"];
        $_SESSION["username"] = $currUser[0]["username"];
        $_SESSION["email"] = $currUser[0]["email"];
        $_SESSION["password"] = $currUser[0]["password"];

        header("Location: ../pages/account.page.php");
        exit;
    } else {
        header("Location: ../pages/login.page.php");
        exit;
    }
} catch (Exception $e) {
    die($e->getmessage());
}