<?php

$root = $_SERVER["DOCUMENT_ROOT"];

require "$root/vendor/autoload.php";

$config = require "$root/config.php";

$pdo = DBConnection::make($config["database"]);

$user = new User($pdo);
$product = new Product($pdo);
$basket = new Basket($pdo);