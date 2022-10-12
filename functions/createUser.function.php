<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

try {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $admin = boolval($_POST["admin"]);
    $imageData = file_get_contents($_FILES["image"]["tmp_name"]);
    $imageType = $_FILES["image"]["type"];

    if (!substr($imageType, 0, 5) === "image") {
        throw new Exception("The file you uploaded isn't an image");
    }

    $user->PostUser($username, $email, $password, $admin, $imageData);

    header("Location: ../pages/login.page.php");
    exit;
} catch (Exception $e) {
    die($e->getmessage());
}