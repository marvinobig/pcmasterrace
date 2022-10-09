<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();

try {
    $username = $_SESSION["username"];
    $password = $_POST["newPass"];

    $user->UpdateUserPass($password, $username);
    $newPass = $user->GetUser($username, $password);
    $_SESSION["password"] = $newPass[0]["password"];

    header("Location: ../pages/userSettings.page.php");
    exit;
} catch (Exception $e) {
    die($e->getmessage());
}