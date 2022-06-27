<?php

$dsn = "mysql:dbname=blog;host:localhost";
$user = "root";
$password = "";

try {

    $bdd = new PDO($dsn, $user, $password);

}catch(PDOException $e){

    echo "Connexion impossible: " . $e->getMessage();

}

$res = $bdd->query("SELECT * FROM articles");

// while($article = $articles->fetch()){
//     echo $article['titre'] . '<br>';
// }
// $articles = $res->fetchAll();

// foreach ($articles as $article) {
//     echo $article['titre']. '<br>';
// }

$id = 2;

$req = $bdd->prepare("SELECT * FROM articles WHERE id = ?");

$req->execute([$id]);

$article = $req->fetch();

echo $article['titre'];
