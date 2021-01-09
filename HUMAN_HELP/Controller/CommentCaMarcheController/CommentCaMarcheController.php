<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "/Presentation/PresentationCommentCaMarche.php");

echo commentCaMarche();