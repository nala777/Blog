<?php

$articles = [
    [
        "id" => 1,
        "titre" => "Article 1",
        "accroche" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ullam non ut deleniti, 
        adipisci tempore id, assumenda ducimus praesentium voluptas molestias 
        nostrum sequi. Repellat, eos? Molestiae dolorum, deleniti nulla placeat amet temporibus quos voluptatum ex?",
        "publication" => "2022-01-05 10:55",
        "image" => "https://placeimg.com/640/480/sepia"
    ],
    [
        "id" => 2,
        "titre" => "Article 2",
        "accroche" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ullam non ut deleniti, 
        adipisci tempore id, assumenda ducimus praesentium voluptas molestias 
        nostrum sequi. Repellat, eos? Molestiae dolorum, deleniti nulla placeat amet temporibus quos voluptatum ex?",
        "publication" => "2022-01-05 10:57",
        "image" => "https://placeimg.com/640/480/animals"
    ],
    [
        "id" => 3,
        "titre" => "Article 3",
        "accroche" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ullam non ut deleniti, 
        adipisci tempore id, assumenda ducimus praesentium voluptas molestias 
        nostrum sequi. Repellat, eos? Molestiae dolorum, deleniti nulla placeat amet temporibus quos voluptatum ex?",
        "publication" => "2022-01-05 11:00",
        "image" => "https://placeimg.com/640/480/tech"
    ]
    ];

foreach ($articles as $key => $article) {
    echo $article['titre'] . "<br>" ;
    echo $article['image'] . "<br>" ;
    
}

