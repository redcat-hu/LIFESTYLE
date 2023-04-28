<!DOCTYPE html>
<html lang="<?= $language[0] ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $json["name"][0].$json["name"][1] ?> - <?= $page ?></title>
    <link rel="stylesheet" href="css/style.css">
    <?php
      if (!empty($cookie_2["tracking"])) {
      echo
      "<!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5W7J5FM');</script>
      <!-- End Google Tag Manager -->";
    } ?>
</head>

<body>
<?php
  if (!empty($cookie_2["tracking"])) {
  echo
  '<!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5W7J5FM"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->';} ?>
<div id="pre_loader" class="f0">
  <b><?= writeLogo($json); ?></b>
  <div>Betöltés folyamatban</div>
</div>

<header>
  <?= writeLogo($json); ?>
  <nav><?= writeNAV ($json, $ishome); ?></nav>
  <a class="btn_js btn_xtra" href="start"><?= $json["nav_btn"] ?></a>
</header>