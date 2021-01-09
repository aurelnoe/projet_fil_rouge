<?php
include_once(PATH_BASE . "Services/ServiceBlog.php");
include_once(PATH_BASE . "Services/ServiceAvis.php");
include_once(PATH_BASE . "Presentation/PresentationBlog.php");

if(!empty($_GET) && isset($_GET['idArticle']))
{
    $service = new ServiceBlog(); 
    $article = $service->searchById($_GET['idArticle']);
    
    $avisService = new ServiceAvis(); 
    $avis = $avisService->searchByIdArticle($_GET['idArticle']);
    
    echo detailArticle($article,$avis);
}