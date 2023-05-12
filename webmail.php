<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Adatok beolvasása a formról
  $name = $_POST["m_name"];
  $email = $_POST["m_email"];
  $message = $_POST["m_message"];

  // Send email
  $to = "info@reshape.hu"; // Címzett e-mail címe
  $subject = "Webmail: ".$name; // Az üzenet tárgya
  $headers = "From: " . $name . " <" . $email . ">"; // Az e-mail fejléce
  $body = $message;

  if (mail($to, $subject, $body, $headers)) {
    echo "Az üzenet sikeresen elküldve.";
  } else {
    echo "Az üzenet küldése sikertelen.";
  }
}
?>