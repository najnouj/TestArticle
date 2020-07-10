<?php ob_start(); ?>
<div class="row">
    <div class="col col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php
            $i=0;
            while ($topArticle = $topArticles->fetch())
            {
                $active='';
                if($i==0)
                {$active=' active';$i=1;}
            ?>
            <div class="carousel-item<?=$active?>">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1><?php echo $topArticle['Title'] ; ?></h1>
                        <p><?php echo getExtrait($topArticle['Content']) ; ?></p>
                        <p><a class="btn btn-lg btn-primary" href="./<?= $topArticle['Id'] ?>/" role="button">Voir l'article</a></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <?php
    $title="Liste des articles";
    while ($article = $articles->fetch())
    {
    ?>
    <div class="col-12 col-md-4">
        <div class="card mb-4 shadow-sm">
            <div class="card-header"><?php echo $article['Title'] ; ?></div>
            <div class="card-body">
                <p class="card-text"><?php echo getExtrait($article['Content']) ; ?></p>
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="./<?= $article['Id'] ?>/" class="btn btn-sm btn-outline-secondary">Voir l'article</a>
                </div>
                <small class="text-muted">Crée le <?php echo $article['updated_date_fr'] ; ?></small>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('./templates/template.php'); ?>