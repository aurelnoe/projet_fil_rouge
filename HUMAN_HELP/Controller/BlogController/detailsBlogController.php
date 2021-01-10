<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "Services/ServiceBlog.php");
include_once(PATH_BASE . "Services/ServiceAvis.php");
include_once(PATH_BASE . "Presentation/PresentationBlog.php");
include_once(PATH_BASE . "/Exceptions/ServiceException.php");

if (!empty($_GET)) {

    $service = new ServiceBlog();
    $avisService = new ServiceAvis();

    if (!empty($_GET) && isset($_GET['idArticle'])) {
        try {
            $article = $service->searchById($_GET['idArticle']);
            $avis = $avisService->searchByIdArticle($_GET['idArticle']);
            echo detailArticle($article, $avis);
            
        } catch (ServiceException $se) {
            header('Location: ../../index.php');
        }
    }
}
