<?php

return [

    "database"=>[
        "name"=>"TODONL",
        "username"=>"root",
        "password"=>"",
        "connection"=>"mysql:host=127.0.0.1",
        "options"=> [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ],
        "tableName"=>"films",
        "className"=>"film",
        "charset" => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
    ],
];