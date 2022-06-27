<?php

// date

// Prend le fuseau horaire comme indiqué

// date_default_timezone_set('Europe/Paris');

// $publication = date("Y-m-d H:i:s");

// echo $publication;

// htmlentities convertit les carac éligible en html
// $commentaire = /*htmlentities*/htmlspecialchars("<script>alert('Salut Kercode !')</script>");

// echo $commentaire;

// $chaine = "Salut à tous , ça va ou quoi?";

// // compte la longueur d'une chaine de caractère

// // echo strlen($chaine);

// if(strlen($chaine) > 50){
//     echo "Trop long";
// }else if(strlen($chaine) < 48){
//     echo "Trop court";
// }

// // Permet d'afficher une chaine de x à y  substr($variable,x,y)

// echo substr($chaine,5,15);

// $password = "azerty";
// //  permet de crypter un mdp
// $password = password_hash($password, PASSWORD_DEFAULT);

// echo $password;
// // verifie le mdp en claire entrée et le mdp crypté
// if(password_verify("azerty", $password)){
//     echo "Password Ok";
// }else{
//     echo "Password Pas Ok";
// }