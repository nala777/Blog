<?php

function contact(){

    extract($_POST);

    $validation = true;

    $erreur = [];

    if(empty($nom) || empty($texte) || empty($email)){
        $validation = false;
        $erreur[] = "Tous les champs sont requis !";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validation = false;
        $erreur[] = "L'adresse email n'est pas valide !";
    }

    if($validation){
        $to = "alan-adam0197@gmail.com";
        $sujet = "Nouveau message de" . $nom . "<" . $email . ">" ."\r\n";
        $message = "
        <h1>Nouveau message de $nom</h1>
        <h2>Adresse email: $email</h2>
        <p>" .nl2br($texte). "</p>
        ";

        $headers= "from" . $nom . "<" . $email . ">" . "\r\n";
        $headers .= "MIMe-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";

        mail($to, $message, $headers);

    }

    unset($_POST["nom"]);
    unset($_POST["email"]);
    unset($_POST["texte"]);

    return $erreur;
}