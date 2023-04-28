<?php
require_once "php/functions.php";
require_once "php/cookie.php";
require_once "php/back.php";
require_once "php/parts/begin.php";

// Base
if ($page == "home") {
    require_once "php/pages/home.php";
} elseif ($page == "start") {
    require_once "php/pages/start.php";
} else {
    require_once "php/pages/404.php";
}

require_once "php/parts/end.php";
?>