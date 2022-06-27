<?php

$articles = [
    [
        "id" => 1,
        "titre" => "Article 1",
        "accroche" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ullam non ut deleniti, 
        adipisci tempore id, assumenda ducimus praesentium voluptas molestias 
        nostrum sequi. Repellat, eos? Molestiae dolorum, deleniti nulla placeat amet temporibus quos voluptatum ex?",
        "publication" => "2022-01-05 10:55",
        "image" => "https://placeimg.com/640/480/animals"
    ],
    [
        "id" => 2,
        "titre" => "Article 2",
        "accroche" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ullam non ut deleniti, 
        adipisci tempore id, assumenda ducimus praesentium voluptas molestias 
        nostrum sequi. Repellat, eos? Molestiae dolorum, deleniti nulla placeat amet temporibus quos voluptatum ex?",
        "publication" => "2022-01-05 10:57",
        "image" => "https://placeimg.com/640/480/nature"
    ],
    [
        "id" => 3,
        "titre" => "Article 3",
        "accroche" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ullam non ut deleniti, 
        adipisci tempore id, assumenda ducimus praesentium voluptas molestias 
        nostrum sequi. Repellat, eos? Molestiae dolorum, deleniti nulla placeat amet temporibus quos voluptatum ex?",
        "publication" => "2022-01-05 11:00",
        "image" => "https://placeimg.com/640/480/arch"
    ],
    [
        "id" => 4,
        "titre" => "Article 4",
        "accroche" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ullam non ut deleniti, 
        adipisci tempore id, assumenda ducimus praesentium voluptas molestias 
        nostrum sequi. Repellat, eos? Molestiae dolorum, deleniti nulla placeat amet temporibus quos voluptatum ex?",
        "publication" => "2022-01-05 11:25",
        "image" => "https://placeimg.com/640/480/tech"
    ]
    

    ];

// if(empty($_POST)){
//     echo 'Le formulaire n\'a pas été envoyé';
// }

// if(isset($_SESSION['member'])){
//     echo " Vous êtes connecté !";
// }else{
//     //redirige sur une page indiqué
//     header('Location:../index.php');
// }

// $chaine = "Bonjour";
// //détruit la variable ciblé
// unset($chaine);

// echo $chaine;

// retourn la variable
// var_dump($articles[0]['publication']);

$email = "kercode@gmail.com";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Votre addresse est correcte !";
}else{
    echo "Votre addresse n'est pas valide !";
}