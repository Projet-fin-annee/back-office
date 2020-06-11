<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/css/updateDefinition.css" />
  <title>Modifie un pays</title>
</head>

<body>
  <div class="header">
    <a href="index.php?url=countries">
      <img src=" assets/img/back.svg" alt="" />
    </a>
  </div>
  <h1 class="title">Modifie les données de l'API grâce aux champs ci-dessous : </h1>
  <div class="container">
    <div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nom du pays :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1">exemple</textarea>
        <small id="emailHelp" class="form-text text-muted">Modifie directement le nom du pays depuis l'espace ci-dessus</small>
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">Titre :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1">exemple</textarea>
        <small id="emailHelp" class="form-text text-muted">Modifie directement le titre du pays depuis l'espace ci-dessus</small>
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">Texte :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">exemple</textarea>
        <small id="emailHelp" class="form-text text-muted">Modifie directement le texte depuis l'espace ci-dessus</small>
      </div>


      <div class="form-group">
        <label for="photo">Photo :</label>
        <input type="file" accept=".png,.jpeg" aria-describedby="video" name="photo" />
        <small id="image" class="form-text text-muted">Modifie directement la photo depuis l'espace ci-dessus et les formats acceptés sont : .png .jpeg
        </small>
      </div>


      <div class="form-group">
        <label for="video">Video :</label>
        <input type="file" accept=".mp4,.mp3" aria-describedby="video" name="video" />
        <small id="image" class="form-text text-muted">Modifie directement la video depuis l'espace ci-dessus et les formats acceptés sont : .mp3 .mp4
        </small>
      </div>
    </div>

    <a href="#" class="btn btn-primary">Valider la modification des données
    </a>
  </div>


</body>

</html>