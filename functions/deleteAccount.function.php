<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();

try {
    $confirmed = $_POST["confirmDelete"];

    if ($confirmed) {
        $user_id = intval($_SESSION["user_id"]);
        $user->DeleteUserById($user_id);

        session_start();
        $_SESSION = array();
        session_destroy();

        header("Location: ../pages/register.page.php");
        exit;
    } else {
        header("Location: ../pages/userSettings.page.php");
        exit;
    }
} catch (Exception $e) {
    die($e->getmessage());
}