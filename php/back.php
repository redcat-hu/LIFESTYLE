<?php
set_include_path( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR );
// BACK
//$json = file_get_contents('json/info.json');
//$json = json_decode($json, JSON_OBJECT_AS_ARRAY);
$language[0] = "hu";

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

if ($url[1] === "varnai") {    // Local
    $local = ["/varnai/", "/varnai_media/", "/redcat_data/data/", true];
} else {                        // Éles
    $local = ["/", "/", "https://red-cat.hu/data/", false];
}
?>