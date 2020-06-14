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

  <form class="container" action="index.php?url=updatecountry&id=<?= $id_country ?>" method="post">

    <div>
      <div class="form-group">
        <label for="country">Pays :</label>
        <input type="text" class="form-control" id="country" name="country" />
      </div>
      <div class="form-group">
        <label for="citationOne">Grande citation 1 :</label>
        <input type="text" class="form-control" id="citationOne" name="citationOne" />
      </div>
      <div class="form-group">
        <label for="title">Titre :</label>
        <input type="text" class="form-control" id="title" name="title" />
      </div>
      <div class="form-group">
        <label for="citationTwo">Grande citation 2 :</label>
        <input type="text" class="form-control" id="citationTwo" name="citationTwo" />
      </div>
      <div class="form-group">
        <label for="imageOne">Image 1 :</label>
        <input type="file" accept=".png,.jpeg" aria-describedby="imageOne" name="imageOne" />
        <small id="imageOne" class="form-text text-muted">Formats acceptés : .png .jpeg
        </small>
      </div>
      <div class="form-group">
        <label for="textIntro"> Texte intro :</label>
        <textarea type="textIntro" class="form-control" id="textIntro" name="textIntro" /></textarea>
      </div>
      <div class="form-group">
        <label for="video">Bande audio d'un discours :</label>
        <input type="file" accept=".mp3" aria-describedby="video" name="video" />
        <small id="image" class="form-text text-muted">Formats acceptés : .mp3
        </small>
      </div>
      <div class="form-group">
        <label for="citationSpeech">Citation du discours :</label>
        <textarea class="form-control" id="citationSpeech" name="citationSpeech"></textarea>
      </div>
      <div class="form-group">
        <label for="person">Nom de la personne du discours :</label>
        <input class="form-control" id="person" name="person"></input>
      </div>
      <div class="form-group">
        <label for="imageTwo">Image 2 :</label>
        <input type="file" accept=".png,.jpeg" aria-describedby="image" name="imageTwo" />
        <small id="imageTwo" class="form-text text-muted">Formats acceptés : .png .jpeg
        </small>
      </div>
      <div class="form-group">
        <label for="textOne">Texte 1 :</label>
        <textarea class="form-control" id="textOne" name="textOne"></textarea>
      </div>
      <div class="form-group">
        <label for="imageThree">Image 3 :</label>
        <input type="file" accept=".png,.jpeg" aria-describedby="image" name="imageThree" />
        <small id="imageThree" class="form-text text-muted">Formats acceptés : .png .jpeg
        </small>
      </div>
      <div class="form-group">
        <label for="textTwo">Texte 2 :</label>
        <textarea class="form-control" id="textTwo" name="textTwo"></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Valider la modification des données
    </button>







  </form>


</body>

</html>