<?php
// PACKAGE CREATOR
function writePackage ($json, $local) {
    $package = "<div class='f0 packbox'>";
        for ($i=0; $i < count($json["package"]); $i++) {
            $package .= '<div id="pack_'. $i .'" class="categ">';
            $package .= '<div class="cover">
                <a class="btn_js btn_xtra" href="start">Kezdjük</a>
                <img src="'. $local[0] .'img/pack_'.$i.'.webp" alt="">
                <h3>'.$json["package"][$i]["title"].'</h3></div>
                <p>'. $json["package"][$i]["mdesc"] .'</p>';
            $package .= '<ul>'; // Package List
            for ($ii=0; $ii < count($json["package"][$i]["desc"]); $ii++) {
                $package .= '<li>'.$json["package"][$i]["desc"][$ii].'</li>';
            }
            $package .= '</ul>';
            $package .= '</div>';
        }
    $package .= "</div>";
    return $package;
}

function writeLogo ($json) {
    echo '<span class="logo"><span>'.$json["name"][0].'</span>'. $json["name"][1] .'<span class="opac">.HU</span></span>';
}

// NAVIGATION BAR
function writeNAV ($json, $ishome) {
    $nav1 = "<ul class='f0'>";
        for ($i=0; $i < count($json["menu"]); $i++) {
            if ($json["menu"][$i][1] != "") {
                $nav1 .= '<li><a class="btn" href="'.$ishome.'#'.$json["menu"][$i][1].'">'.$json["menu"][$i][0].'</a></li>';
            }
        }
    $nav1 .= "</nav>";
    return $nav1;
}

// MOBILE NAVIGATION BAR
function writeMobileNAV ($json, $ishome) {
    $nav1 = "<ul class='f0'>";
        for ($i=0; $i < count($json["mobile_menu"]); $i++) {
            if ($json["mobile_menu"][$i][1] != "") {
                $nav1 .= '<li><a class="f0" href="'.$ishome.'#'.$json["mobile_menu"][$i][1].'">
                <div><i class="'.$json["mobile_menu"][$i][2].'"></i></div><div>'.$json["mobile_menu"][$i][0].'</div>
                </a></li>';
            }
        }
    $nav1 .= "</nav>";
    return $nav1;
}
?>