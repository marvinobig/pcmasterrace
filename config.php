<?php

return [
    "database" => [
        "name" => "pc_master_race",
        "username" => "root",
        "password" => "",
        "connection" => "mysql:host=127.0.0.1;",
        "options" => [
            PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
        ],
    ],
];