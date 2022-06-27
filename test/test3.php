<?php 

// $chaine = "alloa ";
// $chaine2 = " alloa parme";

// $chaine .= $chaine . $chaine2 . "!";

// echo $chaine;

// $nombre1 = 10;
// $nombre2 = 8;

// $nombre1 += 456416541;

// echo $nombre1;

// $resultat = $nombre1 . $nombre2;


// deux façons de comparer
// echo $nombre1 !== $nombre2;
// echo !($nombre1 == $nombre2);


// Opérateur de comparaison

// (5 == 5) and (6 <= 4);
// (5 == 5) or (6 == 4);

// if(5==5){
//     echo "OK";
// }

// $pseudo = "Hiko";
// $privilege = "admin";

// if($pseudo == "Hiko" && $privilege == "admin"){
//     echo "Bienvenue Hiko";
// }elseif ($pseudo=="Kohi"){
//     echo "Bienvenue Kohi";
// }else//{
//     echo "Vous n'êtes pas le maitre de ce domaine";
// // }

// $nombre=8;

// if($nombre>20)
//     $nombre++;
// else
//     $nombre+= 5;

// echo $nombre;

// echo ($nombre>20) ? $nombre++ : $nombre += 5;


$pseudo = "Mimo";
$privilege = "Visiteur";

// switch($pseudo){
//     case "Hiko" : echo "Salut Hiko"  ; break;
//     case "Kohi" : echo  "Salut Kohi" ; break;
//     default : echo "T'es qui toi?" ; break;
// }

$nombre=8;

$i = 0;

// while ($i < $nombre) {
//     echo $i;
//     $i ++;
// }

for ($i=0; $i <= $nombre ; $i++) { 
    echo $i;
}

foreach ($variable as $key => $value) {
    
}