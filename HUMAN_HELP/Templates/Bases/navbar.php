
<div class="header mt-5">
	<div class="header_texture"></div>
	<!-- Arrondi -->
	<div class="header_mask">
		<svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none" >
			<path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#fff"></path>
		</svg> 
	</div>
	<div class="container-fluid contant">
		<div id="test" class="row">
			<div id="BoutonBurgermenuTab">
				<div class="barre1"></div>
				<div class="barre2"></div>
			</div>
			<div class="BlockLogo col-sm-12 col-md-12 col-lg-3 col-xl-5">
				<img class="logo" src="image/logo2.png" height="100px" alt="">
			</div>
			<!---------------------- Barre de navigation ---------------------->
			<nav class="navbar col text-center menuTab">
				<!-- Projets -->
				<a class="col-sm-12 col-lg-1 navLink" href="#">Projets</a>
				<!-- Pays d'action -->
				<div class="dropdown col-sm-12 col-md-12 col-lg-2 col-xl-2">
					<a class="col-sm-12 dropdown-toggle navLink" href="/HUMAN_HELP/Templates/missions/liste_missions.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pays d'action
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item  " href="#">Maroc</a>
						<a class="dropdown-item " href="#">Somalie</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item " href="#">Le plus choisi</a>
					</div>
				</div>
				<!-- Types d'activités-->
				<div class="dropdown col-sm-12 col-md-12 col-lg-2 col-xl-2">
					<a class="col-sm-12 dropdown-toggle navLink" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Types d'activités
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Enseignements</a>
						<a class="dropdown-item" href="#">Médecine</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">La plus choisie</a>
					</div>
				</div>
				<!--Comment ça marche-->
				<a class="col-sm-12 col-lg-2 navLink" href="/HUMAN_HELP/Templates/Autres/comment_ca_marchephp.">Voir plus</a>
				<!--FAQ-->
				<a class="col-sm-12 col-lg-1 navLink" href="/HUMAN_HELP/Templates/FAQ/faq.php" tabindex="-1" aria-disabled="true">FAQ</a>
				<!--Blog-->
				<a class="col-sm-12 col-lg-1 navLink" href="/HUMAN_HELP/Templates/Blog/liste_articles.php"  tabindex="-1" aria-disabled="true">Blog</a>
				<?php 
					if (!isset($_SESSION)) {
						?><a class="col-sm-12 col-lg-1 navLink" href="/HUMAN_HELP/Templates/Security/form_inscription.php" tabindex="-1" aria-disabled="true">Inscription</a><?php
					} else {
						?><a class="col-sm-12 col-lg-1 navLink" href="/HUMAN_HELP/Templates/Security/form_connexion.php" tabindex="-1" aria-disabled="true">Connexion</a><?php
					}
				?>	
			</nav>
		</div>

		<div class="header_slogan">
			<h1 class="slogan">Aider comme vous ne l'avez encore jamais fait</h1>
			<form>
				<div class="row justify-content-md-center search_box">
					<div class="col-md-3 col-lg-3 search_pays">
						<input type="search" class="form-control search_box_pays" placeholder="Pays d'actions">
					</div>
					<div class="col-md-3 col-lg-3 search_activite">
						<input type="search" class="form-control search_box_activite" placeholder="Types d'activités">
					</div>
					<div class="col-md-1 col-lg-1 btn_search">
						<button type="button" class="btn btn-success btn_rechercher">Rechercher</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>