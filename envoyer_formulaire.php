<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Faites ce que vous voulez avec ces données, par exemple, envoyez un e-mail
    $destinataire = "yohannrhiack@gmail.com";
    $sujet = "Demande de devis";
    $contenu = "Nom : $nom\n";
    $contenu .= "Email : $email\n";
    $contenu .= "Message : $message\n";

    // Envoyer l'e-mail
    mail($destinataire, $sujet, $contenu);

    
    exit();
}
?>
