<?php
// Backend
require_once "php/functions.php";
require_once "php/cookie.php";      // ok
require_once "php/back.php";

// Frontend
require_once "php/parts/begin.php";
if ($pageName === "home") {
    require_once "php/pages/home.php";
} elseif ($pageName === "start") {
    require_once "php/pages/start.php";
} else {
    require_once "php/pages/404.php";
}
/*
*/
require_once "php/parts/end.php";
?>