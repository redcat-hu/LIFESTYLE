<?php
// PACKAGE CREATOR
function writePackage ($json, $local) {
    $package = "<div class='f0 packbox'>";
        for ($i=0; $i < count($json["package"]); $i++) {
            $package .= '<div id="pack_'. $i .'" class="categ">';
            $package .= '<div class="cover">
                <div class="btn_js btn_xtra">Kezdjük</div>
                <img src="'. $local[1] .'img/pack_'.$i.'.webp" alt="">
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
?>