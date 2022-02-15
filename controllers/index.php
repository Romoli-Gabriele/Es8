<?php


$films = $query->selectAll($database["tableName"], $database["className"]);
require "views/index.view.php";