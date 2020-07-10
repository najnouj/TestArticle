<?php
function getArticles($limit=0)
{
    $critere = '';
    if($limit>0)
    $critere = ' LIMIT '.$limit.'';
    $db = dbConnect();
    $req = $db->query('SELECT Id , Title, Content, Status, DATE_FORMAT(Created, \'%d/%m/%Y\') AS creation_date_fr, DATE_FORMAT(Updated, \'%d/%m/%Y\') AS updated_date_fr FROM article ORDER BY Created DESC'.$critere.'');

    return $req;
}

function getArticle($articleId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT Id , Title, Content, Status, DATE_FORMAT(Created, \'%d/%m/%Y\') AS creation_date_fr, DATE_FORMAT(Updated, \'%d/%m/%Y\') AS updated_date_fr FROM article WHERE Id = ?');
    $req->execute(array($articleId));
    $article = $req->fetch();

    return $article;
}

function setArticle($title, $content)
{
    $db = dbConnect();
    $articles = $db->prepare('INSERT INTO article(Title, Content, Created, Updated) VALUES(?, ?, NOW(), NOW())');
    $affectedLines = $articles->execute(array($title, $content));

    return $db->lastInsertId();
}

function updateArticle($idarticle, $title, $content)
{
    $db = dbConnect();
    $articles = $db->prepare('UPDATE article SET Title=?, Content=?, Updated=NOW() WHERE Id=?');
    $affectedLines = $articles->execute(array($title, $content,$idarticle));

    return $affectedLines;
}

function deleteArticle($idarticle)
{
    $db = dbConnect();
    $articles = $db->prepare('DELETE FROM article WHERE Id=?');
    $affectedLines = $articles->execute(array($idarticle));

    return $affectedLines;
}

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
