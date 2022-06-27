<?php 
require_once "fonctions/bdd.php";
require_once "fonctions/blog.php";

$bdd = bdd();
if(!empty($_POST)){
    
    $articles = recherche();

}else{

    $articles = articles();

}


include "layouts/head.php "
?>



    <div class="container article">
        <?php include "layouts/search.php" ?>

        <?php

            if(isset($_POST['query'])):
        ?>

        <div class = "row">
            <div class = "col-xs-12">
                <h1>Résultat de votre recherche "<?= $_POST['query']?>"</h1>
            </div>
        </div>

        <?php endif;?>
            
            <?php foreach ($articles as $article) : ?>   
                
        <div class="col-md-4 col-sm-6">
                <article>
                    <img src="<?= $article['image']?>" alt="<?= $article['titre']?>">
                    <p class="date">Posté le <time><?= formatage_date($article['created_at'])?></time></p>
                    <h1><?= $article['titre']?></h1>
                    <p><?= $article['accroche']?></p>
                    <a href="article.php?id=<?= $article['id'];?>">Lire l'article</a>
                </article>
        </div>
        
<?php endforeach ?>

        </div>

<?php include "layouts/footer.php" ?>
        
        



