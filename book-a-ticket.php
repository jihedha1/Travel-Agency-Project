<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $date = htmlspecialchars($_POST['date']);
  $time = htmlspecialchars($_POST['time']);
  $people = htmlspecialchars($_POST['people']);
  $message = htmlspecialchars($_POST['message']);
  $to = 'jihedhallem1234@example.com'; 
  $subject = "New table booking request from the website";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Phone: " . $phone . "\n";
  $body .= "Date: " . $date . "\n";
  $body .= "Time: " . $time . "\n";
  $body .= "# of People: " . $people . "\n";
  $body .= "Message: " . $message;

  $headers = "From: $name <$email>";

  if (mail($to, $subject, $body, $headers)) {
    echo "Votre demande de réservation a été envoyée avec succès. Nous vous contacterons bientôt.";
  } else {
    echo "Une erreur s'est produite lors de l'envoi de votre demande de réservation. Veuillez réessayer.";
  }
}
?>