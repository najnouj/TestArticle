<div class="row">
    <div class="container">
        <h1>Détail Article</h1>
        <p>
            <a href="/admin" class="btn btn-primary my-2">Liste des articles</a>
        </p>
    </div>
    <div class="col-md-12 mb-3">
        <?php
        if($method!=='get')
        {
            if($method==='create')
            {
                $action='new';
                $title='Create article'; 
                $title='' ;
                $content='' ;
            }
            else if($method==='update')
            {
                $action='update';
                $title='Update article';
                $title=$article['Title'] ;
                $content=$article['Content'] ;
       
            }
            ?>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h4 class="mb-3"><?= $title; ?></h4>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="Title">Title</label><br />
                                <input type="text" class="form-control" placeholder="Title..." id="title" name="title" value="<?= $title ?>" required />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Content">Content</label><br />
                                <textarea class="form-control" id="content" name="content" placeholder="Content..." required><?= $content ?></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Enregsitrer</button>
                            </div>
                        </div>
                        <input type="hidden" name="action" id="action" value="<?= $action ?>">
                    </form>
                </div>
            </div>
        <?php
        }
        else
        {
        ?>
            <?php
            if ($article)
            {
            ?>
                <div class="col-md-12 mb-3"><strong><?= htmlspecialchars($article['Title']) ?></strong> created <?= $article['creation_date_fr'] ?></div>>
                <div class="col-md-12 mb-3"><p><?= nl2br(htmlspecialchars($article['Content'])) ?></p></div>
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