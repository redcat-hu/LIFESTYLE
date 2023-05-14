<div id="home" class="f0">
  <div class="f0 pack">
    <div class="f0 box">
      <h2><?= $json["package"][0]["title"] ?></h2>
      <p><?= $json["package"][0]["mdesc"] ?></p>
      <div class="btn more"><a href="#pack_0">Részletek</a></div>
    </div>
    <div class="f0 box">
      <h2><?= $json["package"][1]["title"] ?></h2>
      <p><?= $json["package"][1]["mdesc"] ?></p>
      <div class="btn more"><a href="#pack_1">Részletek</a></div>
    </div>
    <div class="f0 box">
      <h2><?= $json["package"][2]["title"] ?></h2>
      <p><?= $json["package"][2]["mdesc"] ?></p>
      <div class="btn more"><a href="#pack_2">Részletek</a></div>
    </div>
  </div>
</div>

<div class="brand f0">
  <h1><?= writeLogo($json); ?></h1>
  <p>be your best self</p>
</div>

<div id="package" class="b1">
  <h2>Csomagok</h2>
  <?= writePackage ($json, $local); ?>
</div>

<div id="about" class="b1">
<h2>Rólunk</h2>
<p>
A <?= writeLogo($json); ?> egy olyan startup, ahol rendhagyó stratégiával és metodikával optimalizáljuk a 21. századi élethez az egészséges
életmódot, a testmozgást, táplálkozást és ennek minden egyéb elképzelhető aspektusát. Mindezt maximálisan személyre
szabottan a fiataltól az idős korosztályig, az amatőröktől a sportolókig, az egészségesektől a valamilyen betegségekkel küzdőkig, a
speciális táplálkozási igényűekig bezárólag, pótlólagos és preventív jelleggel egyaránt.
</p>
<p>
A <?= writeLogo($json); ?> tevékenységét alapjaiban határozta meg a tanulmányok által megszerzett szaktudás, illetve a közel 20 évre
visszatekintő élsportban megszerzett tapasztalat és impresszió.
</p>
<p>
A <?= writeLogo($json); ?>-nál tisztában vagyunk társadalmunk alapvető problémáival, a rohanó világ okozta kellemetlenségekkel, az élet
túlzsúfoltságával, azzal, hogy az embereknek nincs annyi és olyan minőségű idejük önmaguk gondozására, mint amennyire
valójában szükségük volna. Ennek fényében sosem volt még akkora létjogosultsága egy ilyen kezdeményezésnek, mint
napjainkban.
</p>
<p> A <?= writeLogo($json); ?> erre kínál korszerű megoldást. Küldetésünknek tekintjük, hogy az egészséges életmód globális viszonylatban
szokássá váljon. Célunk a mára világszintű népbetegséggé vált elhízás és elhízás okozta megbetegedések visszaszorítása és
megelőzése, az emberek életminőségének javítása, és a teljesítménymaximalizáláshoz való hozzájárulás minden hozzánk
bizalommal forduló ember életében. </p>
<p>
Filozófiánk értelmében szolgáltatáscsomagjaink árait is úgy szabjuk meg, hogy minél szélesebb körben elérhetővé tegyük őket
valamennyi ember számára.
</p>
<p>
Nem kínálunk varázseljárásokat, módszerink által pusztán hozzáférhetővé tesszük a változtatáshoz szükséges eszköztárat, de ne
feledd, szolgáltatásunk valódi értéke, te magad vagy, az elkötelezettséged, a szívós kitartásod, az akaraterőd és szenvedélyed
ötvözete a legnagyobb közös értékünk! <b>LÉGY A LEGJOBB ÖNMAGAD!!!</b>
</p>
</div>

<div id="contact" class="b1">
  <h2>Kapcsolat</h2>
  <div class="f0">
    <a href="tel:+36304833004" class="btn phone">+36304833004</a>
    <a href="mailto:info@reshape.hu" class="btn mail">info@reshape.hu</a>
  </div>

  <!--
  <div class="b0 siteform">
    <h3>Email küldése <br>közvetlen az oldalról:</h3>
    <form method="post" action="webmail.php">
      <input type="text" id="m_name" name="m_name" placeholder="Név" required><br>
      <input type="email" id="m_email" name="m_email" placeholder="Email" required><br>
      <textarea id="m_message" name="m_message" placeholder="Üzenet" required></textarea><br>
      <input type="submit" value="Küldés">
    </form>
  </div>
  -->

</div>