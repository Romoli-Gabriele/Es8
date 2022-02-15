<?php

$router->get("","controllers/index.php");
$router->get("add-film", "controllers/add-film.php");

$router->post("add-new", "controllers/add-new.php");