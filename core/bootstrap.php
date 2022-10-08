<?php

$root = $_SERVER["DOCUMENT_ROOT"];

require_once "$root/models/basket.model.php";
require_once "$root/models/product.model.php";
require_once "$root/models/user.model.php";
require_once "$root/core/db/dbConnect.php";

$config = require "$root/config.php";

$pdo = DBConnection::make($config["database"]);

$user = new User($pdo);
$product = new Product($pdo);
$basket = new Basket($pdo);