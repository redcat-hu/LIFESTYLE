<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Adatok beolvasása a formról
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Send email
  $to = "info@reshape.hu"; // Címzett e-mail címe
  $subject = "Webmail: ".$name; // Az üzenet tárgya
  $headers = "From: " . $name . " <" . $email . ">"; // Az e-mail fejléce
  $body = $message; // Az üzenet tartalma

  if (mail($to, $subject, $body, $headers)) {
    echo "Az üzenet sikeresen elküldve.";
  } else {
    echo "Az üzenet küldése sikertelen.";
  }
}
?>