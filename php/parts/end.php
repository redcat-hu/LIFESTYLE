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
  <?= writeMobileNAV ($json, $ishome); ?>
</div>

<div id="cookie"></div>
<script>
    let siteLanguage = "<?= $siteLanguage ?>";
    let mainPath = "<?= $siteInfo->mainPath ?>";
</script>
<script src="<?= $siteInfo->mainPath ?>ts/public/main.js?v=<?= time() ?>"></script>
<script src="<?= $siteInfo->redcatPath ?>js/cookie_2.js?v=<?= time() ?>"></script>

</body>
</html>