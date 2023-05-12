<div id="home" class="f0 start">
    <h1>Reshape Kérdőív</h1>
</div>
<div class="b1 questionnaire">
    <h2>Kérlek töltsd ki a kérdőívet</h2>
    <p>A válaszaidra az edzéstervünk és étrendünk személyedre szabása miatt van szükségünk, hogy azt a legoptimálisabban sikerüljön összeállítanunk neked. Adataidat bizalmasan kezeljünk, integritását harmadik féllel szemben garantáljuk.</p>
</div>

<form action="/action_page.php">
<div class="questionnaire g0">

    <div class="box qtop">
        <h3><i class="bi bi-chat-dots-fill"></i> Elérhetőségek</h3>
        <label for="name">Név:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="phone">Telefonszám:</label>
        <input type="tel" id="phone" name="phone" required><br>

        <label for="email">Email cím:</label>
        <input type="email" id="email" name="email" required><br>
    </div>

    <div class="box qtop">
        <h3><i class="bi bi-heart-pulse"></i> Paraméterek</h3>

        <label for="gender">Nem:</label>
        <select id="gender" name="gender" required>
            <option value="male">Férfi</option>
            <option value="female">Nő</option>
            <option value="other">Egyéb</option>
        </select><br>

        <label for="age">Kor:</label>
        <input type="number" id="age" name="age" min="1" max="120" required><br>

        <label for="weight">Testtömeg (kg):</label>
        <input type="number" id="weight" name="weight" min="1" max="400" required><br>

        <label for="height">Magasság (cm):</label>
        <input type="number" id="height" name="height" min="1" max="250" required><br>
    </div>
    
    
<div class="box">
    <h3><i class="bi bi-question-diamond-fill"></i> Általános kérdések</h3>
    <div>
      <label>
        <input type="checkbox" name="injury" value="yes">
        Volt-e vagy van a teljesítőképességedet befolyásoló sérülésed?
      </label>
    </div>
    <div>
      <label>
        <input type="checkbox" name="medication" value="yes">
        Szedsz-e a teljesítőképességedet befolyásoló gyógyszert?
      </label>
    </div>
    <div>
      <label>
        <input type="checkbox" name="coffee" value="yes">
        Fogyasztasz-e napi rendszerességgel kávét?
      </label>
    </div>
    <div>
      <label>
        <input type="checkbox" name="allergies" value="yes">
        Van allergiád, intoleranciád vagy étrended? (vegetáriánus, laktóz érzékenység, stb...)
      </label>
    </div>
    <div>
      <label>
        Milyen diétát vagy étrendet próbáltál már?
        <textarea name="diet"></textarea>
      </label>
    </div>
    <div>
      <label>
        Szedsz táplálék kiegészítőt?
        <select name="supplements">
          <option value="none">Nem</option>
          <option value="protein">Fehérje por</option>
          <option value="vitamins">Vitaminok</option>
          <option value="other">Egyéb</option>
        </select>
      </label>
    </div>
    <div>
      <label>
        Milyen a munkavégzésed fajtája és időbeosztása?
        <textarea name="job"></textarea>
      </label>
    </div>
    <div>
      <label>
        Mennyit, és mikortól alszol?
        <textarea name="sleep"></textarea>
      </label>
    </div>
    <div>
      <label>
        Mikor vagy a legaktívabb a nap folyamán és mikor esne jobban edzeni és mozogni?
        <textarea name="activity"></textarea>
      </label>
    </div>
    <div>
      <label>
        Szoktál sportolni? Ha igen mit, és mennyit egy héten?
        <textarea name="exercise"></textarea>
      </label>
    </div>
    <div>
      <label>
        Milyen formáját szereted a legjobban a kardiónak? (Futás, bicikli, stb...)
        <input type="text" name="cardio">
      </label>
    </div>
    <div>
      <label>
        Szeretnéd-e, hogy úszást is írjunk az edzéstervedbe?
        <input type="checkbox" name="swimming" value="yes">
      </label>
    </div>
</div>



    <div class="box">
        <h3><i class="bi bi-egg-fried"></i> Anyagcserére vonatkozó kérdések</h3>

        <label for="meal-count">Hány étkezésed van?</label><br>
        <input type="number" id="meal-count" name="meal-count" min="0"><br>

        <label for="hungry-time">Mikor érzed magad a legéhesebbnek?</label><br>
        <textarea name="hungry-time" id="hungry-time"></textarea><br>

        <label for="biggest-meal">Melyik étkezésnél szoktál a legtöbbet enni?</label><br>
        <textarea name="biggest-meal" id="biggest-meal"></textarea><br>

        <label for="bathroom-count">Hányszor és mikor van székleted?</label><br>
        <textarea name="bathroom-count" id="bathroom-count"></textarea><br>

        <label for="fluid-intake">Mennyi folyadékot fogyasztasz, és mit?</label><br>
        <textarea id="fluid-intake" name="fluid-intake"></textarea><br>
    </div>

  <button type="submit">Küldés</button>
</div>
</form>
