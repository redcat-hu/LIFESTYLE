<div id="questionnaire" class="siteform">
<form method="post" action="form.php">

    <div class="box">
        <h2>Kérlek töltsd ki a kérdőívet</h2>
        <p>A válaszaidra az edzéstervünk és étrendünk személyedre szabása miatt van szükségünk, hogy azt a legoptimálisabban sikerüljön összeállítanunk neked. Adataidat bizalmasan kezeljünk, integritását harmadik féllel szemben garantáljuk.</p>
    </div>

    <div class="box qtop">
        <h3><i class="bi bi-chat-dots-fill"></i> Elérhetőségeid</h3>
        <input type="text" id="name" name="name" placeholder="Név" required><br>
        <input type="tel" id="phone" name="phone" placeholder="Telefonszám" required><br>
        <input type="email" id="email" name="email" placeholder="Email cím" required><br>
    </div>

    <div class="box qtop">
        <h3><i class="bi bi-heart-pulse"></i> Paraméterek</h3>

        <label for="gender">Nem:</label>
        <select id="gender" name="gender">
          <option value="" disabled selected hidden>Válassz</option>
          <option value="nő">Nő</option>
          <option value="férfi">Férfi</option>
          <option value="egyéb">Egyéb</option>
        </select><br>

        <label for="age">Kor:</label>
        <input type="number" id="age" name="age" min="14" max="120" required><br>

        <label for="weight">Testtömeg (kg):</label>
        <input type="number" id="weight" name="weight" min="40" max="300" required><br>

        <label for="height">Magasság (cm):</label>
        <input type="number" id="height" name="height" min="120" max="230" required><br>
    </div>
    
    
<div class="box">
    <h3><i class="bi bi-question-diamond-fill"></i> Általános kérdések</h3>

    <label for="coffee">Fogyasztasz-e napi rendszerességgel kávét?</label>
    <select name="coffee">
      <option value="" disabled selected hidden>Válassz</option>
      <option value="igen">Igen</option>
      <option value="nem">Nem</option>
    </select><br>

    <label for="supplements">Szedsz táplálék kiegészítőt?</label>
    <select name="supplements">
        <option value="" disabled selected hidden>Válassz</option>
        <option value="nem">Nem szedek</option>
        <option value="fehérje">Fehérje port</option>
        <option value="vitaminok">Vitaminokat</option>
        <option value="egyéb">Egyéb</option>
    </select><br>

    <label for="injury">Volt-e vagy van a teljesítőképességedet befolyásoló sérülésed?</label>
    <select name="injury" required>
        <option value="" disabled selected hidden>Válassz</option>
        <option value="igen, volt">Igen, volt</option>
        <option value="igen, van">Igen, jelenleg is van</option>
        <option value="nincs">Nincs</option>
    </select><br>

    <label for="medication">Szedsz-e a teljesítőképességedet befolyásoló gyógyszert?</label>
    <select name="medication" required>
        <option value="" disabled selected hidden>Válassz</option>
        <option value="igen">Igen</option>
        <option value="igen, van">Nem</option>
    </select><br>

    <label for="allergies">Van allergiád, intoleranciád vagy étrended? (vegetáriánus, laktóz érzékenység, stb...)</label>
    <textarea name="allergies" required></textarea><br>

    <label for="diet">Milyen diétát vagy étrendet próbáltál már?</label>
    <textarea name="diet" required></textarea><br>

    <label for="job">Milyen a munkavégzésed fajtája és időbeosztása?</label>
    <textarea name="job" required></textarea><br>

    <label for="sleep">Mennyit, és mikortól alszol?</label>
    <textarea name="sleep" required></textarea><br>

    <label for="activity">Mikor vagy a legaktívabb a nap folyamán és mikor esne jobban edzeni és mozogni?</label>
    <textarea name="activity" required></textarea><br>

    <label for="exercise">Szoktál sportolni? Ha igen mit, és mennyit egy héten?</label>
    <textarea name="exercise" required></textarea><br>

    <label for="cardio">Milyen formáját szereted a legjobban a kardiónak? (Futás, bicikli, stb...)</label>
    <textarea name="cardio" required></textarea><br>

    <label  for="swimming">Szeretnéd-e, hogy úszást is írjunk az edzéstervedbe?</label>
    <select name="swimming">
      <option value="" disabled selected hidden>Válassz</option>
      <option value="igen">Igen</option>
      <option value="nem">Nem</option>
    </select><br>
</div>



<div class="box">
    <h3><i class="bi bi-egg-fried"></i> Anyagcserére vonatkozó kérdések</h3>

    <label for="meal-count">Hány étkezésed van?</label>
    <input type="number" id="meal-count" name="meal-count" min="1" required><br>

    <label for="hungry-time">Mikor érzed magad a legéhesebbnek?</label>
    <textarea name="hungry-time" id="hungry-time" required></textarea><br>

    <label for="biggest-meal">Melyik étkezésnél szoktál a legtöbbet enni?</label>
    <textarea name="biggest-meal" id="biggest-meal" required></textarea><br>

    <label for="bathroom-count">Hányszor és mikor van székleted?</label>
    <textarea name="bathroom-count" id="bathroom-count" required></textarea><br>

    <label for="fluid-intake">Mennyi folyadékot fogyasztasz, és mit?</label>
    <textarea id="fluid-intake" name="fluid-intake" required></textarea>

    <input type="submit" value="Küldés">
</div>

</form>
</div>
