<?php
try {
    session_start();
    session_unset();
    session_destroy();

    header("Location: ../pages/login.page.php");
    exit;
} catch (Exeception $e) {
    die($e->getmessage());
}