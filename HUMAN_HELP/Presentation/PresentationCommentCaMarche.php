<?php 
require("../../Presentation/PresentationCommun.php");

function commentCaMarche():void
{
    echo head();
    ?> 
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");

        include("../../Templates/Bases/navbar.php");
        ?>
        <div class="container">
		<h1 class="text-center">Comment ça marche ?</h1>
		<div class="p-2">
			<p class="my-4">
				Humans help est le premier portail francophone pour vous aider à trouver facilement une mission <strong>distance</strong> à l’étranger qui vous correspond.
			</p>
			<p class="my-4">
				Notre rôle est de vous mettre en relation avec ce réseau de partenaires. Nous ne sommes pas un organisme nous-mêmes et ne pouvons pas vous donner plus d’informations sur les missions.
			</p>
			<p class="my-4">
				Toutes les missions que vous trouvez sur notre site sont gérées par nos organismes de volontariat partenaires.
			</p>
		</div>
		<hr class="hrGreen w-25">
		<div class="my-4">
			<h2 class="ml-2">Avant le départ</h2> 
			<p class="m-4" style="text-align:justify">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ex hic exercitationem vitae necessitatibus consectetur quaerat, commodi pariatur voluptate. Cum, suscipit. Sunt officia incidunt omnis. Nam quasi asperiores beatae incidunt?
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium necessitatibus doloremque accusamus illum quia ex quas mollitia assumenda inventore provident vel, earum, minima quae! Tempora officia nemo libero quidem at.
			</p>
		</div>
		<div class="my-4 p-2">
			<h2>Une mission à distance :</h2>
			<p class="m-4">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ex hic exercitationem vitae necessitatibus consectetur quaerat, commodi pariatur voluptate. </br>Cum, suscipit. Sunt officia incidunt omnis. Nam quasi asperiores beatae incidunt?
				Voluptatibus optio est architecto quaerat quas quam reprehenderit quasi natus, ipsam inventore! Aut cupiditate sunt omnis id molestias a natus ut atque distinctio mollitia libero architecto, voluptatibus et voluptatum nulla.
			</p>

			<h2 class="">Sur le terrain</h2> 
			<p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ex hic exercitationem vitae necessitatibus consectetur quaerat, commodi pariatur voluptate. Cum, suscipit. Sunt officia incidunt omnis. Nam quasi asperiores beatae incidunt?
				Voluptatibus optio est architecto quaerat quas quam reprehenderit quasi natus, ipsam inventore! Aut cupiditate sunt omnis id molestias a natus ut atque distinctio mollitia libero architecto, voluptatibus et voluptatum nulla.
				Vero soluta eos fugiat quasi omnis est doloribus repellat minima nulla magni pariatur, aspernatur ab voluptatibus voluptates reprehenderit architecto minus eius. Odit, reprehenderit at voluptas alias quia laudantium vel molestiae.
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium necessitatibus doloremque accusamus illum quia ex quas mollitia assumenda inventore provident vel, earum, minima quae! Tempora officia nemo libero quidem at.
			</p>
		</div>
		<hr class="hrGreen w-25">
		<div class="my-4 p-2">
			<h2 class="text-center">Infos Co-Vid</h2> 
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ex hic exercitationem vitae necessitatibus consectetur quaerat, commodi pariatur voluptate. </br>Cum, suscipit. Sunt officia incidunt omnis. Nam quasi asperiores beatae incidunt?
				Voluptatibus optio est architecto quaerat quas quam reprehenderit quasi natus, ipsam inventore! Aut cupiditate sunt omnis id molestias a natus ut atque distinctio mollitia libero architecto, voluptatibus et voluptatum nulla.
				Vero soluta eos fugiat quasi omnis est doloribus repellat minima nulla magni pariatur, aspernatur ab voluptatibus voluptates reprehenderit architecto minus eius. Oditmolestiae.
				Lorem ipsum dolor sit amet consectetur adipisicing elit.</br> 
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ex hic exercitationem vitae necessitatibus consectetur quaerat, commodi pariatur voluptate. Cum, suscipit. Sunt officia incidunt omnis. Nam quasi asperiores beatae incidunt?
			</p>
		</div>
		<?php
		if (!empty($_GET)) 
		{
		?>
			<a href="../MissionsController/detailsMissionController.php?idMission=<?php echo $_GET['idMission'];?>" 
			   class="btn btnGreen w-100 my-1">
			   Retour aux détails de la mission
			</a>
			<a href="../MissionsController/formParticipationMissionController.php?idMission=<?php echo $_GET['idMission'];?>"
			   class="btn btn-primary w-100 my-3">
			   PARTICIPER A CETTE MISSION
			</a>
		<?php
		}
		?>
	</div>
		<?php      
    include("../../Templates/Bases/footer.php") 
    ?>
</body>
</html>
<?php
}
?>