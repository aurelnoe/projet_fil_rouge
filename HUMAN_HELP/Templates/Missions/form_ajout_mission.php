<head>
    <title>Formulaire d'ajout d'une mission</title>
</head>

<div class="col-12 col-md-6 container pt-4 my-4 border rounded">

        <h2 class="text-center my-2 pb-2">Ajouter une nouvelle mission</h2>

        <form class="needs-validation p-3" action="" method="POST" novalidate>

            <hr class="mb-4 mt-2">

            <div class="mb-3 form-group">
                <label for="denomination">Dénomination sociale</label>
                <input type="text" class="form-control" name="denomination" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <div class="mb-3 form-group">
                <label for="title">Titre de la mission</label>
                <input type="text" class="form-control" name="title" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>   

            <div class="mb-3 form-group">
                <label for="email">Adresse mail</label>
                <input type="email" class="form-control" name="email" placeholder="you@example.com" required pattern="^\w{2,}@\w{2,}\.\w{2,}$">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="row p-0 mb-3">
                <div class="col-12 col-md-6 form-group w-50 pl-3">
                    <label class="h-50" for="country">Pays concerné</label>
                    <select class="custom-select list-group d-block h-50 w-100" name="country" required>
                    <option class="list-group-item" value="">Choisissez...</option>
                    <option class="list-group-item">Mali</option>
                    <option class="list-group-item">Gabon</option>
                    <option class="list-group-item">Somalie</option>
                    <option class="list-group-item">Egypte</option>
                    <option class="list-group-item">Maroc</option>
                    </select>
                    <div class="invalid-feedback">
                    Choisissez un pays valide.
                    </div>
                </div>
                
                <div class="col-12 col-md-6 w-50 form-group pl-3">
                    <label class=" h-50" for="activity">Type d'activité</label>
                    <select class="custom-select list-group d-block h-50 w-100" name="activity" required>
                        <option class="list-group-item" value="">Choisissez...</option>
                        <option class="list-group-item">Médecine</option>
                        <option class="list-group-item">Enseignement</option>
                        <option class="list-group-item">Donations</option>
                        <option class="list-group-item">Traduction</option>
                        <option class="list-group-item">Construction</option>
                        <option class="list-group-item">Sportive</option>
                        <option class="list-group-item">Aide juridique</option>
                        <option class="list-group-item">Soutient psychologique</option>
                        <option class="list-group-item">Aide administrative</option>
                    </select>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
            </div>

            <div class="mb-3 form-group">
                <label for="descriptionMission">Description de la mission</label>
                <textarea type="textarea" class="form-control" name="descriptionMission" placeholder=""></textarea>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <div class="d-block mb-3 form-group">
                <label>Type de formation</label>
                <div class="row">
                    <div class="custom-control custom-radio mx-4">
                        <input name="TypeForm" id="distance" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="distance">Distance</label>
                    </div>
                    <div class="custom-control custom-radio mx-2">
                        <input name="TypeForm" id="terrain" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="terrain">Sur le terrain</label>
                    </div>
                </div>  
            </div>

            <div class="mb-3 form-group">
                <label for="dateMission">Date de début de la mission</label>
                <div class="input-group date"  data-provide="datepicker">
                    <input type="date" class="form-control" name="dateMission" placeholder="jj/mm/aaaa" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <div class="mb-3 form-group">
                <label for="dureeMission">Durée de la mission<span class="text-muted"> (en jour)</span></label>
                <input type="number" class="form-control" name="dureeMission" placeholder="">
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <div class="mb-3 form-group">
                <label for="imageMission">Ajouter une image</label>
                <input type="file" class="form-control-file" name="imageMission" placeholder="" capture>
            </div>

            <hr class="mb-4 mt-4">
            
            <button class="btn btnGreen btn-lg btn-block mb-5" type="submit">Ajouter une mission</button>
    </form>   
</div>
