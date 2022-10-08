<?php

$cwd = getcwd();

require_once "$cwd/models/basket.model.php";
require_once "$cwd/models/product.model.php";
require_once "$cwd/models/user.model.php";
require_once "$cwd/core/db/dbConnect.php";

$config = require "$cwd/config.php";

$pdo = DBConnection::make($config["database"]);