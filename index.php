<?php
require('./controllers/controller.php');

$path = request_path();

try {
    $request=explode("/",$path);
    switch ($request[0]) {
        case '/' : case '' :
            listPublicArticles();
            break;
        case 'admin' :
            if(count($request)>1)
            {
                if($request[1]==='create')
                adminArticle('create');
                else if(intval($request[1])>0)
                {
                    if($request[2]!=='')
                    adminArticle($request[2],$request[1]);
                    else
                    adminArticle('get',$request[1]);
                }
                else
                listAdminArticles();
            }
            else
            listAdminArticles();
            break;
        default:
            if(intval($request)>0)
                publicArticle('get',$request[0]);
            else
            listPublicArticles();
            break;
    }

}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}