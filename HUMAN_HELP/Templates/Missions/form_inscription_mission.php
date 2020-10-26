<head>
    <title>Formulaire de participation à une mission</title>
</head>

<!-- <div class="col-12 col-md-5 container pt-4 my-4 border rounded">
    
</div> -->
<head>
    <title>Formulaire de participation à une mission</title>
</head>

<div class="col-12 col-md-6 container pt-4 my-4 border rounded">

        <h2 class="text-center my-2 pb-2">Formulaire de participation à une mission</h2>

        <form class="needs-validation p-3" action="" method="POST" novalidate>

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
                <label for="denomination">Adresse mail</label>
                <input type="text" class="form-control" name="mail" placeholder="" value="mail@mail.com" required>
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

                
                
                

            <div class="mb-3 form-group">
                <label for="descriptionMission">Message</label>
                <textarea type="textarea" class="form-control" name="message" placeholder="text-area"></textarea>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            
            <hr class="mb-4 mt-4">
            
            <button class="btn btnGreen btn-lg btn-block mb-5" type="submit">Envoyer</button>
    </form>   
</div>
