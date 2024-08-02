<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $to = "jihedhallem1234@gmail.com";
    $subject = "Nouveau message de $name";
    $message = "Nom: $name\n\n";
    $message .= "Email: $email\n\n";
    $message .= "Commentaire:\n$comment";
    $headers = "From: $email";
    if (mail($to, $subject, $message, $headers)) {
        echo '<script>';
        echo 'alert("Votre message a été envoyé avec succès.");';
        echo 'setTimeout(function(){ window.location.href = "VotrePageActuelle.html"; }, 10000);'; 
        echo '</script>';
    } else {
        echo '<script>';
        echo 'alert("Erreur lors de l\'envoi du message. Veuillez réessayer.");';
        echo 'window.history.back();'; 
        echo '</script>';
    }
?>
