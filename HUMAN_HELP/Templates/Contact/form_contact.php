
<head>
    <title>Formulaire de contact</title>
</head>

<div class="col-12 col-md-4 container pt-4 my-4 border rounded">

        <h2 class="text-center my-2 pb-2">Formulaire de contact</h2>

        <form class="needs-validation p-3" action="" method="POST" novalidate>

            <hr class="mb-4 mt-2">

            <div class="mb-3">
                <label for="ContactEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-auto mb-3 w-50">
                <input type="email" class="form-control" id="ContactEmail" placeholder="Email" required pattern="^\w{2,}@\w{2,}\.\w{2,}$">
                </div>
            </div>

            <div class="mb-3">
                <div class="col-auto mb-2 w-50">
                    <label for="nomContact">Nom</label>
                    <input  name="nomContact" placeholder="Nom" class="form-control"  type="text" required> 
                </div>
            </div>   

            <div class="mb-3">
                <div class="col-auto mb-3 w-50">
                    <label for="prenomContact">Prénom</label>
                    <input  name="prenomContact" placeholder="Prénom" class="form-control"  type="text" required> 
                </div>
            </div>

            
            <div class="col-auto mb-3 w-50">
                    <label for="country">Pays</label>
                    <select class="custom-select d-block w-100" name="country" required>
                    <option value="">Choisissez...</option>
                    <option>France</option>
                    <option>Belgique</option>
                    <option>Suisse</option>
                    <option>Espagne</option>
                    <option>Italie</option>
                    </select>
                    <div class="invalid-feedback">
                    Choisissez un pays valide.
                    </div>
            </div>
              
            <div class="col-auto mb-3 w-50">
                    <label for="NumContact">Téléphone</label>
                    <input type="tel" id="NumContact" name="NumContact" placeholder="Tél" required pattern="^0(6|7)[0-9]{8}$">
            </div>
            

            <div class="mb-3">
                <div class="col-auto mb-2 w-50">
                    <label for="objetContact">Objet</label>
                    <input  name="objetContact" placeholder="Objet" class="form-control"  type="text" required> 
                </div>
            </div>
            <div class="d-block mb-3">
                <label for="messageContact">Message</label>
                <textarea type="textarea" class="form-control" name="messageContact" placeholder="Message"></textarea>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <hr class="mb-4 mt-4">
            
            <button class="btn btnGreen btn-lg btn-block mb-5" type="submit">Nous contacter</button>
    </form>   
</div>
