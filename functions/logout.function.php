<?php
try {
    session_start();
    $_SESSION = array();
    session_destroy();

    header("Location: ../pages/login.page.php");
    exit;
} catch (Exeception $e) {
    die($e->getmessage());
}