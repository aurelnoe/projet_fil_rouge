<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceBlog.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceAvis.php");
include_once("../../Presentation/PresentationBlog.php");

if(!empty($_GET) && isset($_GET['idArticle']))
{
    $service = new ServiceBlog(); 
    $article = $service->searchById($_GET['idArticle']);
    
    $avisService = new ServiceAvis(); 
    $avis = $avisService->searchByIdArticle($_GET['idArticle']);
    
    echo detailArticle($article,$avis);
}