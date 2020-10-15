<body>

<div class="col-12 col-md-4 container pt-4 my-4 border rounded">

        <h2 class="text-center my-2 pb-2">Ajouter une nouvelle actualité</h2>

        <form class="needs-validation  p-3" action="" method="POST" novalidate>

            <hr class="mb-4 mt-2">

            <div class="mb-3">
                <label for="titleArticle">Titre de l'article</label>
                <input type="text" class="form-control" name="titleArticle" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <div class="row">
                <div class="col-auto mb-3">
                    <label for="countryArticle">Pays concerné</label>
                    <select class="custom-select d-block w-100" name="countryArticle" required>
                    <option value="">Choisissez...</option>
                    <option>Mali</option>
                    <option>Gabon</option>
                    <option>Somalie</option>
                    <option>Egypte</option>
                    <option>Maroc</option>
                    </select>
                    <div class="invalid-feedback">
                        Choisissez un pays valide.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="descriptionArticle">Description de l'article</label>
                <textarea type="textarea" class="form-control" name="descriptionArticle" placeholder=""></textarea>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <div class="mb-3">
                <label for="imageArticle">Ajouter une image</label>
                <input type="file" class="form-control" name="imageArticle" placeholder="" capture>
            </div>

            <div class="mb-3">
                <label for="dateArticle">Date de l'article</label>
                <div class="input-group date"  data-provide="datepicker">
                    <input type="date" class="form-control" name="dateArticle" placeholder="jj/mm/aaaa" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <hr class="mb-4 mt-4">

            <button class="btn btnGreen btn-lg btn-block mb-5" type="submit">Ajouter un article</button>

        </form>
    </div>
</body>

