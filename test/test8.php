<?php

// function somme($nombre1, $nombre2){
//     $resultat = $nombre1 + $nombre2;

//     return $resultat;
// }


// $entier = 8;
// $decimale = 5.2;

// $somme = somme($entier, $decimale);

// echo $somme;

$chaine = " Ma variable globale";
$chaine1 = "Ma variable globale 1";

function somme($nombre1, $nombre2){


    //  permet de prendre les variables globale définit avant en dehors d'une fonction
    echo $GLOBALS['chaine'];

    $resultat = $nombre1 + $nombre2;

    return $resultat;
}



echo $result = somme(8, 2.2);

// echo $chaine;
