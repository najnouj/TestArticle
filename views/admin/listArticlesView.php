<div class="row">
    <div class="container">
        <h1>Liste des articles</h1>
        <p>
            <a href="/" class="btn btn-primary my-2">Retour au site</a>
            <a href="/admin/create/" class="btn btn-primary my-2">Ajouter un articles</a>
        </p>
    </div>
    <?php
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
                    <a type="button" href="/admin/<?=$article['Id']?>/update/" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <a type="button" href="/admin/<?=$article['Id']?>/delete/" class="btn btn-sm btn-outline-secondary">Delete</a>
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
<?php $title='Liste des articles'; ?>
<?php $content = ob_get_clean(); ?>
<?php require('./templates/template.php'); ?>