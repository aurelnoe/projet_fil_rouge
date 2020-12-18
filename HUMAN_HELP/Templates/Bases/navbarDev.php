<div class="container-fluid p-0 col-12 fixed-top">
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

    <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="/HUMAN_HELP/">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/HUMAN_HELP/Controller/FormulairesUtilisateurController.php?action=connexion">Connexion</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/HUMAN_HELP/Controller/FormulairesUtilisateurController.php?action=formAjout">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/HUMAN_HELP/Templates/Contact/form_contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/HUMAN_HELP/Templates/Autres/Comment_ca_marche.php">Comment ca marche?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/HUMAN_HELP/Controller/FaqController/faqController.php">FAQ</a>
        </li>

        <li class="nav-item">
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Compte perso
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/HUMAN_HELP/Templates/Compte_personnel/details_compte.php">Details compte</a>
              <a class="dropdown-item" href="/HUMAN_HELP/Templates/Compte_personnel/form_modif_compte.php">Modification infos perso</a>
            </div>
          </div>   
        </li>

        <li class="nav-item">
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/HUMAN_HELP/Controller/BlogController/listeBlogController.php">Liste des articles</a>
              <a class="dropdown-item" href="/HUMAN_HELP/Controller/BlogController/formulaireArticleController.php?action=add">Ajouter un article</a>
            </div>
          </div>   
        </li>

        <li class="nav-item">
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Missions
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/HUMAN_HELP/Controller/MissionsController/listeMissionController.php">Liste des missions</a>
              <a class="dropdown-item" href="/HUMAN_HELP/Controller/MissionsController/formulairesMissionController.php?action=add">ajout mission</a>
              <a class="dropdown-item" href="/HUMAN_HELP/Controller/MissionsController/listeMissionProController.php">Liste mission pro</a>
            </div>
          </div>   
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Deconnexion</a>
        </li>   
      </ul>
    </div>
  </nav>
</div>