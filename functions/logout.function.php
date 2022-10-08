<?php
//looks for session variables stored in session start//
session_start();
//erases said variables//
session_destroy();
//takes user back to login page//
header("Location: ../LoginPage.html");

?>