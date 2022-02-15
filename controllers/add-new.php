<?php
$newFilm = [
    "titolo"=>$_POST["titolo"],
    "valutazione"=>$valutazione,
];
$query->insertFilm($database['tableName'], $newFilm);
$films = $query->selectAll($database["tableName"], $database["className"]);
require "views/index.view.php";