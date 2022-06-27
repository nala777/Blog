<?php include "layouts/head.php";
require_once "fonctions/bdd.php";
require_once "fonctions/user.php";
require_once "fonctions/blog.php";
if(!isset($_SESSION['user'])){
    header('Location: connexion.php');
}

$bdd = bdd();
$infos = infos();
$commentaires = commentaires_user();

?>
    <div class="container commentaires">
        <div class="row">
            <div class="col-xs-12">
                <h1>Bienvenue <?=$infos['pseudo']?> !</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p>Adresse e-mail : <?=$infos['email']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h1>Derniers commentaires !</h1>
            </div>
        </div>
        <div class="row commentaire">
            <?php foreach($commentaires as $commentaire): ?>
            <div class="col-xs-12">
                <p class="date">Posté par <?=$infos['pseudo'] ?> le <time datetime="<?= $commentaire['created_at']?>"><?= formatage_date($commentaire['created_at'])?></time> :</p>
                <p><?= $commentaire['commentaire'] ?></p>
            </div>
            <?php endforeach ?>
        </div>
        <?php include "layouts/footer.php" ?>