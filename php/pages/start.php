<div id="home" class="f0 start">
    <h1>Reshape Kérdőív</h1>
</div>
<div class="b1 brand">
    <h2>Kérlek töltsd ki a kérdőívet</h2>
    <p>A válaszaidra az edzéstervünk és étrendünk személyedre szabása miatt van szükségünk, hogy azt a legoptimálisabban sikerüljön összeállítanunk neked. Adataidat bizalmasan kezeljünk, integritását harmadik féllel szemben garantáljuk.</p>
</div>
<div class="b1 brand">
    <form action="/action_page.php">
    <label for="name">Név:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="phone">Telefonszám:</label>
    <input type="text" id="phone" name="phone"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <p>Ezek az alapkérdéseink, melyek a megismerésedhez szükségesek.</p><br><br>

    <label for="quest_1">1. Mi a cél, milyen irányú változást szeretnél elérni a testeden?</label>
    <input type="text" id="quest_1" name="quest_1"><br><br>

    <p>Nemed?</p>
    <input type="radio" id="html" name="fav_language" value="HTML">
    <label for="html">Nő</label><br>
    <input type="radio" id="css" name="fav_language" value="CSS">
    <label for="css">Férfi</label><br>

    <label for="quantity">Korod?</label>
    <input type="number" id="quantity" name="quantity" min="14" max="80"><br><br>



    <input type="submit" value="Submit">
    </form>
</div>