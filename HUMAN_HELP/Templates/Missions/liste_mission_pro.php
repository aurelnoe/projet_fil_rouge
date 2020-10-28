<head>
    <title>Liste mission pro</title>
</head>
<div class="container">
    <h2 class="text-center">Liste de vos mission(s) :</h2>

    <hr class="my-4">

    <div class="card-group w-100">
        <div class="row justify-content-between w-100">
            <div class="col-12 col-md-6">
                <div class="card cardListeMissionPro m-auto">
                    <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Titre : Développement numérique</h5>
                        <p class="card-text">Type d'activité : informatique</p>
                        <p class="card-text">Pays : Ghana (Afrique)</p>
                        <p class="card-text">Date de début : 26 Mai 2021</p>
                    </div>
                    <div class="card-footer">
                        <div class="row m-auto">
                            <a href="/HUMAN_HELP/?q=Missions/details_mission" class="btn btn-primary col-5 w-100">Voir la mission</a>
                            <form class="offset-2 col-5 pl-0 pr-0" action="?action=delete">
                                <button type="submit" class="btn btn-danger w-100" onsubmit="">Supprimer</button>
                            </form>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card cardListeMissionPro m-auto">
                    <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Titre de la mission</h5>
                        <p class="card-text">Type d'activité :</p>
                        <p class="card-text">Pays :</p>
                        <p class="card-text">Date de début :</p>                      
                    </div>
                    <div class="card-footer">
                        <div class="row m-auto">
                            <a href="/HUMAN_HELP/?q=Missions/details_mission" class="btn btn-primary col-5 w-100">Voir la mission</a>
                            <form class="offset-2 col-5 pl-0 pr-0" action="?action=delete" method="POST">
                                <button type="submit" class="btn btn-danger w-100" onsubmit="">Supprimer</button>
                            </form>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>                     
    </div>

    <hr class="my-4">

    <div class="col-10 col-md-6 m-auto">
        <a class="btn btnGreen w-100 mb-4" href="/HUMAN_HELP/?q=Missions/form_ajout_mission">Ajouter une nouvelle mission</a>
    </div>

</div>