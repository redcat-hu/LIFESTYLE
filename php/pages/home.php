<div id="home" class="f0">

  <video autoplay muted loop id="homeVideo">
    <source src="<?= $siteInfo->mainPath; ?>img/video1.mp4" type="video/mp4">
  </video>

  <div class="content f0">
    <img src="<?= $siteInfo->mainPath; ?>img/logo.webp" alt="teszt">
    <p>A Reshape a legpraktikusabb ahhoz, hogy jobb formába kerülj. Mi segítünk elérni  céljaidat a saját testeddel, egészséges étrend, céloptimalizált edzésterv, a te életviteledhez igazodva. Profizmus praktikusan az egészséges, sportos testért.</p>
    <a class="btn_js btn_xtra" href="#about">Ismerj meg minket jobban!</a>
  </div>

</div>

<div class="brand f0">
  <h1><?= writeLogo($json); ?></h1>
  <p>be your best self</p>
</div>

<div id="package" class="b1">
  <h2>Csomagok</h2>
  <?= writePackage ($json, $siteInfo); ?>
</div>

<div id="about" class="b1">
  <h2>Rólunk</h2>
  <p> A <?= writeLogo($json); ?> két barát, és egyben két élsportoló által létrejött projekt, akik amellett, hogy minden nap ebben élnek, ezt is tanulták. Segítünk meghatározni a célodat, majd végig kísérve téged elérni azt. A változás és az egészségesebb forma sikere két dologtól függ:</p>
  <p>A siker első része a megfelelő tudás. Megbeszéljük milyen változásra számíthatsz, ez az edzéstervektől kezdve, az étkezési naplóidon keresztül, az emésztőrendszer rehabilitációján át mindenről szól, ami a tested. </p>
  <p>A siker másik összetevője a megfelelő módszertan. Mi a <?= writeLogo($json); ?> csapatánál egy teljesen új szemlélettel dolgozunk, a módszertant illetően. Ez az a tudás, ami segít neked a legkényelmesebben beleilleszteni a napjaidba azt a plusz mozgást és egészséges étrendet, amivel könnyedén és gyorsan változhatsz. Miattunk nem kell előbb kelned, gyalog járnod a munkahelyedre, vagy lemondanod a nassolásról. Csak töltsd ki a kérdőívünket, hogy megfelelően feltérképezhessünk, és mi a céljaidnak megfelelően megadjuk neked a legprofibb iránymutatást.</p>
  <p> Közös konzultációnk alkalmával meghatározzuk az elérni kívánt céljaidat, hogy milyen változást szeretnél látni magadon, a többit pedig bízd ránk. Csomagjaink teljesen személyre szabott étrendeket, edzésterveket és ami a legfontosabb, egy mentort adnak neked. Mi végig támogatni fogunk az utadon, mivel nem időszakos eredményeket, hanem az alap életfelfogásod egészségesebbé tételét szeretnénk elérni veled együtt.</p>
  <p>A mi projektünknek a valódi értéke, te magad vagy. Az elkötelezettséged, a kitartásod, az akaraterőd és szenvedélyed ötvözete, amelyek együtt lesznek a legnagyobb közös értékünk!</p>
  <p>LÉGY A LEGJOBB ÖNMAGAD!</p>

  <details>
    <summary>További információk</summary><br>
    <p>A <?= writeLogo($json); ?> egy olyan startup, ahol rendhagyó stratégiával és metodikával optimalizáljuk a 21. századi élethez az egészséges életmódot, a testmozgást, táplálkozást és ennek minden egyéb elképzelhető aspektusát. Mindezt maximálisan személyre szabottan a fiataltól az idős korosztályig, az amatőröktől a sportolókig, az egészségesektől a valamilyen betegségekkel küzdőkig, a speciális táplálkozási igényűekig bezárólag, pótlólagos és preventív jelleggel egyaránt.</p><br>
    <p>A <?= writeLogo($json); ?>-nál tisztában vagyunk az élet túlzsúfoltságával, és azzal, hogy az embereknek nincs annyi és olyan minőségű idejük önmaguk gondozására, mint amennyire valójában szükségük volna. Ennek fényében sosem volt még akkora létjogosultsága egy ilyen kezdeményezésnek, mint napjainkban.</p><br>
    <p>A <?= writeLogo($json); ?> erre kínál korszerű megoldást. Küldetésünknek tekintjük, hogy az egészséges életmód globális viszonylatban szokássá váljon. Célunk a mára világszintű népbetegséggé vált elhízás és elhízás okozta megbetegedések visszaszorítása és megelőzése, az emberek életminőségének javítása, és a teljesítménymaximalizáláshoz való hozzájárulás minden hozzánk bizalommal forduló ember életében. Légy teljesen kezdő, vagy már profi sportoló, mi mindenkinek a saját szintjéhez adaptálva mutatunk irányt</p>
  </details>

</div>

<div id="contact" class="b1">
  <h2>Kapcsolat</h2>
  <div class="f0">
    <a href="tel:+36304833004" class="btn phone">+36304833004</a>
    <a href="mailto:info@reshape.hu" class="btn mail">info@reshape.hu</a>
  </div>
</div>