<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/css/updateDefinition.css" />
  <title>Modifié une définition</title>
</head>

<body>
  <div class="header">
    <a href="index.php?url=definition">
      <img src=" assets/img/back.svg" alt="" />
    </a>
  </div>
  <h1 class="title">Modifie les données de ton api grâce aux champs ci-dessous : </h1>
  <div class="container">
    <div class="group">
      <div class="form-group">
        <label for="exampleInputEmail1">Mot</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1">exemple</textarea>

        <small id="emailHelp" class="form-text text-muted">Modifie directement ton mot depuis l'espace ci-dessus</small>
      </div>
      <a href="#" class="btn btn-primary">Valider la modification du mot
      </a>
    </div>
    <div class="group">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Définition :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">exemple</textarea>
        <small class="form-text text-muted">Modifie directement ta définition depuis l'espace ci-dessus</small>
      </div>
      <a href="#" class="btn btn-primary">Valider la modification du texte
      </a>
    </div>
  </div>

</body>

</html>