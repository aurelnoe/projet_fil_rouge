<footer>
    <div class="row text-center">
        <div class="col-xl-4 col-md-12">
        <ul class="list-footer list-group list-group-flush">
            <li class="list-group-item"><a style="text-decoration:none" href="#navbarSupportedContent">Pays d'action</a></li>
            <li class="list-group-item"><a style="text-decoration:none" href="#navbarSupportedContent">Types d'activités</a></li>
            <li class="list-group-item"><a style="text-decoration:none" href="/HUMAN_HELP/Controller/CommentCaMarcheController/CommentCaMarcheController.php">Comment ça marche</a></li>
            <?php
				if (empty($_SESSION)) {
				?>
            <li class="list-group-item"><a style="text-decoration:none" href="/HUMAN_HELP/Controller/UtilisateurController/FormulairesUtilisateurController.php?action=formAjout">Inscription</a></li>
            <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="/HUMAN_HELP/Controller/AccueilController.php?action=deconnection" tabindex="-1" aria-disabled="true">Deconnexion</a>
                </li>  
            <?php } ?>
            <li class="nav-item">
                    <a class="nav-link" href="/HUMAN_HELP/Controller/MissionsController/listeMissionController.php" tabindex="-1" aria-disabled="true">Projets</a>
            </li> 
        </ul>
        <!-- changer les liens ancres pour les mettres sur la banière -->
        </div>
        <div class="col-xl-4 col-md-12">
        <ul class="list-footer list-group list-group-flush">
            <li class="list-group-item">Politiques de confidentialités</li>
            <li class="list-group-item">Politique d'utilisation des cookies</li>
            <li class="list-group-item">Conditions générales</li> 
            <li class="list-group-item"><a style="text-decoration:none" href="/HUMAN_HELP/Controller/FaqController/faqController.php">FAQ</a></li>
            <li class="list-group-item"><a style="text-decoration:none" href="/HUMAN_HELP/Controller/BlogController/listeBlogController.php">Blog</a></li>
        </ul>
        </div>
        <div class="col-xl-4 col-md-12 button-footer">
        <button class="btn btnGreen btn-lg  mb-5 button-footer1 text-center" type="submit">S'inscrire à la Newsletter</button>
        <button class="btn btnGreen btn-lg  mb-5 button-footer2 text-center" type="submit">Contact</button>
        </div>
    </div>
</footer>