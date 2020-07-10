<?php

require('./models/model.php');

function request_path()
{
    $request_uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    $script_name = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
    $parts = array_diff_assoc($request_uri, $script_name);
    if (empty($parts))
    {
        return '/';
    }
    $path = implode('/', $parts);
    if (($position = strpos($path, '?')) !== FALSE)
    {
        $path = substr($path, 0, $position);
    }
    return $path;
}

function listPublicArticles()
{
    $articles = getArticles();
    $topArticles = getArticles(4);
    require('./views/public/listArticlesView.php');
}

function publicArticle($method='get',$id='')
{
    if($id!=='')
    $article = getArticle($id);
    $method=$method;
    require('./views/public/articleView.php');
}

function listAdminArticles()
{
    $articles = getArticles();
    require('./views/admin/listArticlesView.php');
}

function adminArticle($method='get',$id='')
{
    $response='';
    if(isset($_POST))
    {
        if(isset($_POST['action']) && $_POST['action']==='new')
        {
            $response = setArticle($_POST['title'],$_POST['content']);
            if(intval($response)>0)
            header("Location:/admin/".$response.'/update');
        }
        else if(isset($_POST['action']) && $_POST['action']==='update')
        {
            $response = updateArticle($id,$_POST['title'],$_POST['content']);
            if($response)
            header("Location:/admin/".$id.'/update');
        }
    }
    if($id!=='')
    {
        if($method==='delete')
        {
            $response = deleteArticle($id);
            if($response)
            header("Location:/admin");
        }
        else
        $article = getArticle($id);
    }
    $method=$method;
    require('./views/admin/articleView.php');
}

function getExtrait($post)
{
    return mb_substr($post,0,100,'UTF-8').'...';
}