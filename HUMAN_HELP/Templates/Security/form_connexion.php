<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../Assets/style.css">
  <title>Formulaire de connexion</title>
</head>

<body>

<?php include("../Bases/navbar.php") ?>

  <form class="form-signin border m-auto w-25 text-center p-3" action="../../Sources/recuperation.php" method="POST">
    <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <div class="m-4">
          <label for="mail" class="sr-only">Adresse mail</label>
          <input type="text" name="mail" class="form-control" placeholder="email@mail.com" required>
      </div>
      <div class="m-4">
          <label for="password" class="sr-only">Mot de passe</label>
          <input type="text" name="password" class="form-control" placeholder="mot de passe" required>
      </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit" value="Envoyer">Envoyer</button>

  </form>
  
</body>
</html>