<?php include "layouts/head.php ";

require_once "fonctions/bdd.php";
require_once "fonctions/user.php";

$bdd = bdd();
if(!empty($_POST)){
    $erreurs = connexion();
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12  col-sm-offset-3">
            <h1>Connectez-vous !</h1>
        </div>
    </div>
    <form method="post" action="">
        
        
        <?php

            if(isset($erreur)):
        ?>


        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="message erreur"><?= $erreur ?></div>
            </div>
        </div>
        <?php endif ?>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="message confirmation">Ici j'affiche un message de confirmation !</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <input type="text" name="pseudo" placeholder="Pseudo *" value="<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <input type="password" name="password" placeholder="Mot de passe *">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <input type="submit" value="Me connecter!">
            </div>
        </div>
    </form>
    <?php include "layouts/footer.php" ?>