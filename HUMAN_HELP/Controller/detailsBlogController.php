<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceBlog.php");

if(!empty($_GET) && isset($_GET['idArticle']))
{
    $service = new ServiceBlog(); 
    $article = $service->searchById($_GET['idArticle']);
}