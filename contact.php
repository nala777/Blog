<?php 

require_once "fonctions/bdd.php";
require_once "fonctions/contact.php";

$bdd = bdd();
if(!empty($_POST)){

    $erreurs = contact();
};

include "layouts/head.php" 

?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Contactez-moi !</h1>
            </div>
        </div>
        <form method="post" action="">
        <?php 
                if(isset($erreurs)):
                    if($erreurs):
                        foreach ($erreurs as $erreur) :
            ?>

            <div class="row">
                <div class="col-xs-12">
                    <div class="message erreur"><?= $erreur ?></div>
                </div>
            </div>
            <?php endforeach; else: ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="message confirmation">Ici j'affiche un message de confirmation !</div>
                </div>
            </div>
            <?php
                endif;
            endif
            ?>
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="nom" placeholder="Votre nom *" value="<?php if(isset($_POST['nom'])) echo $_POST['nom'] ?>">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="email" placeholder="Votre adresse email *" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <textarea name="texte" placeholder="En quoi puis-je vous aider ? *"><?php if(isset($_POST['texte'])) echo $_POST['texte'] ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input type="submit" value="Envoyer!">
                </div>
            </div>
        </form>
        <?php include "layouts/footer.php" ?>