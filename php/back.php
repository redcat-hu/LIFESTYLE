<?php
set_include_path( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR );
$json = json_decode(file_get_contents('json/data.json'), JSON_OBJECT_AS_ARRAY); // open json data
$siteLanguage = "hu";

$url = $_SERVER['REQUEST_URI'];
$urlParts = explode("?", $url);
$urlParts = explode("/", $urlParts[0]);

$localServer = ($urlParts[1] === "reshape") ? true : false;
$i = ($localServer) ? 2 : 1;

$siteInfo = new stdClass();

if ($localServer) {
    $siteInfo -> mainPath = '/reshape/';
    $siteInfo -> redcatPath = '/redcat_main/';
} else {
    $siteInfo -> mainPath = '/';
    $siteInfo -> redcatPath = 'https://red-cat.hu/data/';
}

//$pageName = $urlParts[$i] ?? "home";
$pageName = ($urlParts[$i] !== "") ? $urlParts[$i] : "home";
$ishome = ($pageName == "home") ? "" : "home";

/*
echo '<pre>';
var_dump($urlParts[$i]);
echo '<pre>';
*/
?>