<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Controller/HeaderController/headerController.php");
?>

<div class="header mt-5">
	<div class="header_texture"></div>
	<!-- Arrondi -->
	<div class="header_mask">
		<svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
			<path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#fff"></path>
		</svg>
	</div>
	<div class="container-fluid contant">
		<div id="test" class="row">
			<div id="BoutonBurgermenuTab">
				<div class="barre1"></div>
				<div class="barre2"></div>
			</div>
			<div class="BlockLogo col-md-12 col-lg-3 col-xl-5 pt-3">
				<a href="\HUMAN_HELP\">
					<img class="logo" src="\HUMAN_HELP\images\logo2.png" height="100px" alt="">
				</a>
			</div>
			<!---------------------- Barre de navigation ---------------------->
			<nav class="navbar col text-center menuTab mx-5">
				<a class="col-sm-12 col-lg-1 navLink" href="/HUMAN_HELP/Controller/MissionsController/listeMissionController.php">
					Projets
				</a>
				<!--Comment ça marche-->
				<a class="col-sm-12 col-lg-2 navLink" href="/HUMAN_HELP/Controller/CommentCaMarcheController/CommentCaMarcheController.php">
					Voir plus
				</a>
				<a class="col-sm-12 col-lg-1 navLink" href="/HUMAN_HELP/Controller/FaqController/faqController.php" tabindex="-1" aria-disabled="true">
					FAQ
				</a>
				<a class="col-sm-12 col-lg-1 navLink" href="/HUMAN_HELP/Controller/BlogController/listeBlogController.php" tabindex="-1" aria-disabled="true">
					Blog
				</a>
				<?php
				if (!isset($_SESSION)) {
				?>
					<a class="col-sm-12 col-lg-1 navLink" href="/HUMAN_HELP/Controller/UtilisateurController/FormulairesUtilisateurController.php?action=formAjout" tabindex="-1" aria-disabled="true">
						Inscription
					</a>
				<?php
				} else {
				?>
					<a class="col-sm-12 col-lg-1 navLink" href="/HUMAN_HELP/Controller/UtilisateurController/FormulairesUtilisateurController.php?action=connexion" tabindex="-1" aria-disabled="true">
						Connexion
					</a>
				<?php
				}
				?>
			</nav>
		</div>

		<div class="header_slogan">
			<h1 class="slogan">Aider comme vous ne l'avez encore jamais fait</h1>

			<div class="row justify-content-md-center search_box">
			<div class="col-md-3 col-lg-3 my-2 btn-group">
					<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						Pays
					</button>
					<ul class="dropdown-menu">
						<?php foreach ($allPays as $pays) { ?>
							<li>
								<a class="dropdown-item" href="/HUMAN_HELP/Controller/MissionsController/searchMissionsController.php?idPays=<?php echo $pays->getIdPays();?>">
									<?php echo $pays->getNomPays(); ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-md-3 col-lg-3 btn-group">
					<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						Activité
					</button>
					<ul class="dropdown-menu">
						<?php foreach ($allTypeActivite as $typeActivite) { ?>
							<li>
								<a class="dropdown-item" href="/HUMAN_HELP/Controller/MissionsController/searchMissionsController.php?idTypeActivite=<?php echo $typeActivite->getIdTypeActivite(); ?>">
									<?php echo $typeActivite->getTypeActivite(); ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

