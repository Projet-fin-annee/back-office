<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="src/styles/css/updateDefinition.css" />
  <title>Modifié une définition</title>
</head>

<body>
  <div class="header">
    <a href="index.php?url=definition">
      <img src=" assets/img/back.svg" alt="" />
    </a>
  </div>
  <h1 class="title title__definition">Modifie les données de l'API grâce aux champs ci-dessous : </h1>
  <form class="container" action="index.php?url=updatedefinition&id=<?= $id_definition ?>" method="post">
    <div class="container__definition">
      <div class="form-group">
        <label for="exampleInputEmail1">Mot</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="word">exemple</textarea>
        <small id="emailHelp" class="form-text text-muted">Modifie directement ton mot depuis l'espace ci-dessus</small>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Définition :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text">exemple</textarea>
        <small class="form-text text-muted">Modifie directement ta définition depuis l'espace ci-dessus</small>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Valider la modification du texte
    </button>
  </form>
  </div>

</body>

</html>