<head>
    <title>Connexion</title>
</head>

<div class="col-11 col-md-4 container pt-4 my-4 border rounded">

  <form class="form-signin m-auto text-center p-3" action="../../Sources/recuperation.php" method="POST">

    <img class="logo2" src="" alt="" width="200" height="200">
    

    <h1 class="h3 mb-3 font-weight-normal">Connectez vous</h1>

    <div class="form-label-group m-4">
        <label for="mail" class="sr-only">Adresse mail</label>
        <input type="text" name="mail" class="form-control" placeholder="email@mail.com" required>
    </div>

    <div class="form-label-group m-4">
        <label for="password" class="sr-only">Mot de passe</label>
        <input type="password" name="password" class="form-control" placeholder="mot de passe" required>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit" value="Envoyer">Envoyer</button>

  </form>

</div>

