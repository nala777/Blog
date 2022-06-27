<?php

function articles(){
    global $bdd;

    $req = $bdd->query('SELECT id, titre, accroche, image, created_at FROM articles');

    $articles = $req->fetchAll();

    return $articles;
}


function formatage_date($publication){

    $publication = explode(" ", $publication);
    $date = explode("-", $publication[0]);
    $heure = explode(":", $publication[1]);

    $mois = ["","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];

    $resultat = $date[2] . ' ' . $mois[(int)$date[1]] . ' ' . $date[0] . ' à ' . $heure[0] . 'h' . $heure[1];

    return $resultat;

}

function article(){

    global $bdd;

    $id = (int)$_GET['id'];

    $req = $bdd->prepare("SELECT id, titre, contenu, image, created_at FROM articles WHERE id = ?");

    $req->execute([$id]);

    $article = $req->fetch();

    if(empty($article)){
        header('Location: errors/404.php');
    }else{
        return $article;

    }
    // var_dump($article);die;

}

function nb_commentaires($id){

    global $bdd;
    $req = $bdd->prepare("SELECT COUNT(*) FROM commentaires WHERE article_id = ?");

    $req->execute([(int)$id]);
    $nb_commentaires = $req->fetch()[0];
    return $nb_commentaires;

}

function commentaires(){

    global $bdd;

    $id = (int)$_GET['id'];

    $req = $bdd->prepare("SELECT commentaires.*, users.pseudo FROM commentaires INNER JOIN users ON user_id = users.id AND commentaires.article_id = ?");

    $req->execute([$id]);

    $commentaires = $req->fetchAll();

        return $commentaires;

    // var_dump($article);die;

}

function recherche(){

    global $bdd;

    extract($_POST);

    $req = $bdd->prepare("SELECT id, titre, accroche, created_at, image FROM articles WHERE titre LIKE :query OR contenu LIKE :query");

    $req->execute([
        "query" => '%'.$query.'%' 
    ]);

    $recherche = $req->fetchAll();

    return $recherche;
}

function commentaires_user(){
    global $bdd;

    $req = $bdd->prepare("SELECT commentaires.*, articles.titre FROM commentaires INNER JOIN articles ON commentaires.article_id = articles.id AND commentaires.user_id = ?");

    $req->execute ([$_SESSION['user']]);
    $commentaires = $req->fetchAll();

    return $commentaires;
}

function commenter(){
    if(isset($_SESSION['user'])){
        global $bdd;

        extract($_POST);

        $erreur = "";

        if(!empty($commentaires)){

            $id = (int)$_GET['id'];

            $req = $bdd->prepare('INSERT INTO commentaires(user_id, article_id, commentaire, created_at, updated_at) VALUES(:user_id, :commentaire, :created_at, :updated_at)');

            $req->execute([
                "user_id" => $_SESSION['user_id'],
                "article_id" => $id,
                "commentaire" =>nl2br(htmlspecialchars($commentaires)),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]);

            header("Location:article.php?id=".$id);
        }else
            $erreur .= "Vous devez entrer un commentaire !";

            return $erreur;
    }
}