<?php
set_include_path( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR );
$json = file_get_contents('json/data.json');
$json = json_decode($json, JSON_OBJECT_AS_ARRAY);
$language[0] = $json["lang"];

// ? jelek kiiktatása + paraméterek kiírása
$url = strpos($_SERVER['REQUEST_URI'], "?");
if ($url != false) {
    $url = explode("?", $_SERVER['REQUEST_URI']);
    parse_str($url[1], $param);

} else {
    $url[0] = $_SERVER['REQUEST_URI'];
}
// URL szétbontása
$url = explode("/", $url[0]);

if ($url[1] === "reshape") {    // Local
    $local = ["/reshape/", "/0_media/reshape/", "/redcat_main/", true];
    $i = 2;
} else {                        // Éles
    $local = ["/", "/", "https://red-cat.hu/data/", false];
    $i = 1;
}

$page = $url[$i] ? $url[$i] : "home";
if ($page == "home") {
    $ishome = "";
} else {
    $ishome = "home";
}
?>