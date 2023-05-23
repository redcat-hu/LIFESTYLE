<?php
$cookieAccepted = false;
$cookieLevel = '{"necessary": false, "functionality": false, "tracking": false, "targeting": false}';

$cookieAccepted = isset($_COOKIE["cookie_consent_accepted"]) ? $_COOKIE["cookie_consent_accepted"] : $cookieAccepted;
$cookieLevel = isset($_COOKIE["cookie_consent_level"]) ? json_decode($_COOKIE["cookie_consent_level"], JSON_OBJECT_AS_ARRAY) : json_decode($cookieLevel, JSON_OBJECT_AS_ARRAY);
?>