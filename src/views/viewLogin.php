<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="src/styles/css/login.css" />
  <title>Connexion</title>
</head>

<body>
  <div class="container">
    <h1 class="title"> Ici est le back-office du web-doc groupe 6, si tu es administrateur connecte toi !
    </h1>
    <form class="form" action="index.php?url=login" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Mail :</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"> <?= $emailErr ? "<p class='error__registers'>$emailErr</p>" : null ?>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe :</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        <?= $passwordErr ? "<p class='error__registers'>$passwordErr</p>" : null ?>
      </div>
      <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
  </div>



</body>

</html>