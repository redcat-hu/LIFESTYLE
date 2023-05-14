<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // data scan from form
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];

  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $weight = $_POST["weight"];
  $height = $_POST["height"];

  $coffee = $_POST["coffee"];
  $supplements = $_POST["supplements"];
  $injury = $_POST["injury"];
  $medication = $_POST["medication"];
  $allergies = $_POST["allergies"];
  $diet = $_POST["diet"];
  $job = $_POST["job"];
  $sleep = $_POST["sleep"];
  $activity = $_POST["activity"];
  $exercise = $_POST["exercise"];
  $cardio = $_POST["cardio"];
  $swimming = $_POST["swimming"];

  $meal = $_POST["meal-count"];
  $hungry = $_POST["hungry-time"];
  $bigmeal = $_POST["biggest-meal"];
  $bathroom = $_POST["bathroom-count"];
  $fluid = $_POST["fluid-intake"];

  $content =
  '<html><body><pre>
    <h1>'.$name.' kérdőív</h1>

    <h2>Elérhetőségek</h2>
    Név: '.$name.'
    Telefon: '.$phone.'
    Email: '.$email.'

    <h2>Paraméterek</h2>
    Nem: '.$gender.'
    Kor: '.$age.' év
    Testtömeg: '.$weight.' kg
    Magasság: '.$height.' cm

    <h2>Általános kérdések</h2>
    Fogyasztasz-e napi rendszerességgel kávét?
    Válasz: '.$coffee.'

    Szedsz táplálék kiegészítőt?
    Válasz: '.$supplements.'

    Volt-e vagy van a teljesítőképességedet befolyásoló sérülésed?
    Válasz: '.$injury.'

    Szedsz-e a teljesítőképességedet befolyásoló gyógyszert?
    Válasz: '.$medication.'

    Van allergiád, intoleranciád vagy étrended? (vegetáriánus, laktóz érzékenység, stb...)
    Válasz: '.$allergies.'

    Milyen diétát vagy étrendet próbáltál már?
    Válasz: '.$diet.'

    Milyen a munkavégzésed fajtája és időbeosztása?
    Válasz: '.$job.'

    Mennyit, és mikortól alszol?
    Válasz: '.$sleep.'

    Mikor vagy a legaktívabb a nap folyamán és mikor esne jobban edzeni és mozogni?
    Válasz: '.$activity.'

    Szoktál sportolni? Ha igen mit, és mennyit egy héten?
    Válasz: '.$exercise.'

    Milyen formáját szereted a legjobban a kardiónak? (Futás, bicikli, stb...)
    Válasz: '.$cardio.'

    Szeretnéd-e, hogy úszást is írjunk az edzéstervedbe?
    Válasz: '.$swimming.'

    <h2>Anyagcserére vonatkozó kérdések</h2>
    <b>Hány étkezésed van?</b>
    Válasz: '.$meal.'

    Mikor érzed magad a legéhesebbnek? 
    Válasz: '.$hungry.'

    Melyik étkezésnél szoktál a legtöbbet enni? 
    Válasz: '.$bigmeal.'

    Hányszor és mikor van székleted? 
    Válasz: '.$bathroom.'

    Mennyi folyadékot fogyasztasz, és mit? 
    Válasz: '.$fluid.'
  <pre></body></html>';

  // Send email
  $to = "kerdoiv@reshape.hu"; // Címzett e-mail címe
  $subject = "Kérdőív kitöltve: ".$name; // Az üzenet tárgya
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: " . $name . " <" . $email . ">" . "\r\n";
  $body = $content; // Az üzenet tartalma

  if (mail($to, $subject, $body, $headers)) {
    echo "Az üzenet sikeresen elküldve.";
  } else {
    echo "Az üzenet küldése sikertelen.";
  }
}
  //echo $content;
?>