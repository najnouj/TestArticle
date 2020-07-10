<div class="row">
    <div class="col-md-12 mb-3">
        <div class="container">
            <h1>Détail Article</h1>
            <p>
                <a href="/" class="btn btn-primary my-2">Liste des articles</a>
            </p>
        </div>
        <?php
        if($method==='get')
        {
        ?>
            <?php
            if ($article)
            {
            ?>
                <div class="col-md-12">
                    <div class="card mb-12 shadow-sm">
                        <div class="card-header"><?= htmlspecialchars($article['Title']) ?></div>
                        <div class="card-body">
                            <p class="card-text"><?= nl2br(htmlspecialchars($article['Content'])) ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><?php echo $article['updated_date_fr'] ; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $title=$article['Title'];
            }
            ?>
        <?php 
        }
        ?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('./templates/template.php'); ?>