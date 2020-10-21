<head>
    <title>Connexion</title>
</head>

<div class="container col-11 col-md-4 pt-2 my-5 border rounded">

  <form class="form-signin m-auto text-center p-3 formConnexion" action="" method="POST">

    <div class="logo1 mb-4"></div>

    <h1 class="h3 mb-3 font-weight-normal">Connectez vous</h1>

    <div class="form-label-group mb-4">
        <label for="mail" class="sr-only">Adresse mail</label>
        <input type="email" name="mail" class="form-control inputConnexion" placeholder="email@mail.com" required pattern="^\w{2,}@\w{2,}\.\w{2,}$">
    </div>

    <div class="form-label-group mb-4">
        <label for="password" class="sr-only">Mot de passe</label>
        <input type="password" name="password" class="form-control inputConnexion" placeholder="mot de passe" required>
    </div>

    <button class="btn btnGreen btn-block mb-4" type="submit" value="Envoyer">Connexion</button>

  </form>
    
</div>

