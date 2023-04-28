<?php 
/*
$to = "info@red-cat.hu";
$subject = "Teszt e-mail";
$message = "Ez egy teszt üzenet.";
$headers = "From: RESHAPE Kérdőív <kerdoiv@reshape.hu>\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// E-mail küldése
if (mail($to, $subject, $message, $headers)) {
  echo "Az e-mail sikeresen elküldve!";
} else {
  echo "Az e-mail küldése sikertelen.";
}
*/
?>

<footer class="g0">
  <div>
    <?= writeLogo($json); ?>
    <p>be your best self</p>
  </div>
  <div>
    <b>Kapcsolat</b>
    <ul>
      <li><a href="tel:+36304833004" class="phone"><i class="bi bi-telephone-fill"></i> +36304833004</a></li>
      <li><a href="mailto:info@reshape.hu" class="mail"><i class="bi bi-envelope-fill"></i> info@reshape.hu</a></li>
    </ul>
  </div>
  <div>
    <b>Linkek</b>
    <ul>
      <li>Csomagok</li>
      <li>Rólunk</li>
      <li>Kérdőív</li>
    </ul>
  </div>
  
</footer>
<div class="footer_bottom f0">
  <div><a href="https://id.red-cat.hu/nn" target="_blank">Powered by REDCAT</a></div>
</div>

<div id="mobile_nav">
  <ul class="f0">
    <li><a class="f0" href="#home">
      <div><i class="bi bi-house-fill"></i></div>
      <div>Főoldal</div>
    </a></li>
    <li><a class="f0" href="#package">
      <div><i class="bi bi-box-seam-fill"></i></div>
      <div>Csomagok</div>
    </a></li>
    <li><a class="f0" href="#about">
      <div><i class="bi bi-person-circle"></i></div>
      <div>Rólunk</div>
    </a></li>
    <li><a class="f0" href="#contact">
      <div><i class="bi bi-chat-dots-fill"></i></div>
      <div>Kapcsolat</div>
    </a></li>
  </ul>
</div>

<div id="cookie"></div>
<script>
    var language = "<?= $language[0] ?>";
    var php = ["<?= $local[0] ?>", "<?= $local[1] ?>", "<?= $local[2] ?>"];
</script>
<script src="<?= $local[0] ?>js/main.js?v=<?= time() ?>"></script>
<script src="<?= $local[2] ?>js/cookie_2.js?v=<?= time() ?>"></script>
</body>
</html>