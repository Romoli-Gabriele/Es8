<?php
$config = require "config.php";
$database= $config["database"];
require "vendor/autoload.php";





return new queryBuilder(
    Connection::make($config["database"])
);