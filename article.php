<?php
include_once "layouts/head.php";
require_once "fonctions/bdd.php";
require_once "fonctions/blog.php";
$bdd = bdd();
$article = article();
$nb_commentaires = nb_commentaires($article['id']);
$commentaires = commentaires();

if(!empty($_POST)){
    $erreur = commenter();
}

?>

    <div class="container article">
        <?php include "layouts/search.php" ?>
        <div class="row">
            <article>
                <div class="col-sm-5">
                    <img src="<?= $article['image']?>" alt="<?= $article['titre']?>">
                </div>
                <div class="col-sm-7">
                    <p class="date">Posté le <time><?= formatage_date($article['created_at'])?></time></p>
                    <h1><?= $article['titre']?></h1>
                    <p><?=$article['contenu']?></p>
                </div>
            </article>
        </div>
    </div>
    <div class="container commentaires">
        <div class="row">
            <div class="col-xs-12">
                <h1>Commentaires <?php echo $nb_commentaires ?></h1>
            </div>
        </div>
        <?php foreach ($commentaires as $comment) : ?>
        <div class="row commentaire">
            <div class="col-xs-12">
                <p class="date">Posté par <?=$comment['pseudo']?> le <time><?= formatage_date($comment['created_at'])?></time> :</p>
                <p><?= $comment['commentaire']?></p>
            </div>
        </div>

        <?php 
            endforeach;
            if(isset($_SESSION['user'])):
        ?>
        
        
        <div class="row">
            <div class="col-xs-12">
                <form method="post" action="">
                    <?php
                        if(isset($erreur)):
                            if($erreur):
                        ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="message erreur"><?= $erreur ?></div>
                        </div>
                    </div>
                    <?php
                    else:
                        ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="message confirmation">Votre commentaire à bien étét posté !</div>
                        </div>
                    </div>
                    <?php endif; endif; ?>
                    <textarea name="commentaire" placeholder="Votre commentaire *"></textarea>
                    <input type="submit" value="Commenter">
                </form>
            </div>
        </div>
        <?php endif; ?>
        <?php include "layouts/footer.php" ?>