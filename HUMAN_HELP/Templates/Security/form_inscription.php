<head>
  <title>Formulaire d'ajout d'une mission</title>
</head>
​
<div class="col-12 col-md-5 container pt-4 my-4 border rounded">
​
      <h2 class="text-center my-2 pb-2">formulaire d'inscription</h2>
​
      <form class="needs-validation p-3" action="" method="POST" novalidate>
          
​
          <hr class="mb-4 mt-2">
          <div class="d-block mb-3 form-group">
              <label>Civilité</label>
              <div class="row">
                  <div class="custom-control custom-radio mx-4">
                      <input name="TypeForm" id="monsieur" type="radio" class="custom-control-input" checked required>
                      <label class="custom-control-label" for="distance">Monsieur</label>
                  </div>
                  <div class="custom-control custom-radio mx-2">
                      <input name="TypeForm" id="madame" type="radio" class="custom-control-input" required>
                      <label class="custom-control-label" for="terrain">Madame</label>
                  </div>
              </div>  
          </div>
          <div class="mb-3 form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom" placeholder="" value="" required>
              <div class="invalid-feedback">
                  Ce champ est requis.
              </div>
          </div>
​
          <div class="mb-3 form-group">
              <label for="prenom">prénom</label>
              <input type="text" class="form-control" name="prenom" placeholder="" value="" required>
              <div class="invalid-feedback">
                  Ce champ est requis.
              </div>
          </div>   
          <div class="mb-3 form-group">
              <label for="dateMission">Date de naissance</label>
              <div class="input-group date"  data-provide="datepicker">
                  <input type="date" class="form-control" name="dateNaissance" placeholder="jj/mm/aaaa" required>
                  <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                  </div>
              </div>
              <div class="invalid-feedback">
                  Ce champ est requis.
              </div>
          </div>
          
​
          <form>
  <div class="form-group">
    <label for="exampleInputEmail1">email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">se souvenirs de moi</label>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Ville</label>
      <input type="text" class="form-control" id="validationTooltip03" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">région</label>
      <select class="custom-select" id="validationTooltip04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Code postal</label>
      <input type="text" class="form-control" id="validationTooltip05" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <label for="phone">Numéro de téléphone:</label>
​
<input type="tel" id="phone" name="phone"
       
</form>
