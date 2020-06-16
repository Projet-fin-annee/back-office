<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="src/styles/css/update.css" />
  <title>Modifie un pays</title>
</head>

<body>

  <div class="header">
    <a href="index.php?url=countries">
      <img src=" assets/img/back.svg" alt="" />
    </a>
  </div>

  <h1 class="title">Modifie les données de l'API grâce aux champs ci-dessous : </h1>

  <form class="container" action="index.php?url=updateonecountry&id=<?= $id_country ?>&action=update" method="post" enctype="multipart/form-data">

    <div>
      <div class="form-group">
        <label for="country">Nom du Pays :</label>
        <input type="text" class="form-control" id="country" name="country" value="<?= $country["country"] ?>" />
      </div>
      <div class="form-group">
        <label for="imageBackground">Image background :</label>
        <input type="file" accept=".png,.jpeg" aria-describedby="image" name="imageBackground" value="<?= $country["imageBackground"] ?>" />
        <small id="imageBackground" class="form-text text-muted">Formats acceptés : .png .jpeg
        </small>
      </div>
      <div class="form-group">
        <label for="htag">Htag :</label>
        <input type="text" class="form-control" id="htag" name="htag" value="<?= $country["htag"] ?>" />
      </div>
      <div class="form-group">
        <label for="victimsName"> Nom des victimes :</label>
        <textarea type="textIntro" class="form-control" id="victimsName" name="victimsName" /><?= $country["victimsName"] ?></textarea>
      </div>
      <div class="form-group">
        <label for="citationOne">Grande citation 1 :</label>
        <input type="text" class="form-control" id="citationOne" name="citationOne" value="<?= $country["citationOne"] ?>" />
      </div>
      <div class="form-group">
        <label for="imageOne">Image de le personne incrustée dans un pays :</label>
        <input type="file" accept=".png,.jpeg" aria-describedby="imageOne" name="imageOne" value="<?= $country["imageOne"] ?>" />
        <small id="imageOne" class="form-text text-muted">Formats acceptés : .png .jpeg
        </small>
      </div>
      <div class="form-group">
        <label for="textIntro"> Texte intro :</label>
        <textarea type="text" class="form-control" id="textIntro" name="textIntro" /><?= $country["textIntro"] ?></textarea>
      </div>
      <div class="form-group">
        <label for="titleSpeech"> Titre du speech :</label>
        <textarea type="text" class="form-control" id="titleSpeech" name="titleSpeech" /><?= $country["titleSpeech"] ?></textarea>
      </div>
      <div class="form-group">
        <label for="citationSpeech">Citation du discours :</label>
        <textarea class="form-control" id="citationSpeech" name="citationSpeech"><?= $country["citationSpeech"] ?></textarea>
      </div>
      <div class="form-group">
        <label for="video">Bande audio d'un discours :</label>
        <input type="file" accept=".mp3" aria-describedby="video" name="video" value="<?= $country["video"] ?>" />
        <small id="image" class="form-text text-muted">Formats acceptés : .mp3
        </small>
      </div>
      <div class="form-group">
        <label for="person">Nom de la personne du discours :</label>
        <input class="form-control" id="person" name="person" value="<?= $country["person"] ?>"></input>
      </div>
      <div class="form-group">
        <label for="title">Titre géneral :</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $country["title"] ?>" />
      </div>
      <div class="form-group">
        <label for="imageTwo">Image 2 :</label>
        <input type="file" accept=".png,.jpeg" aria-describedby="image" name="imageTwo" value="<?= $country["imageTwo"] ?>" />
        <small id="imageTwo" class="form-text text-muted">Formats acceptés : .png .jpeg
        </small>
      </div>
      <div class="form-group">
        <label for="textOne">Texte 1 :</label>
        <textarea class="form-control" id="textOne" name="textOne"><?= $country["textOne"] ?></textarea>
      </div>
      <div class="form-group">
        <label for="citationTwo">Grande citation 2 :</label>
        <input type="text" class="form-control" id="citationTwo" name="citationTwo" value="<?= $country["citationTwo"] ?>" />
      </div>
      <div class="form-group">
        <label for="imageThree">Image 3 :</label>
        <input type="file" accept=".png,.jpeg" aria-describedby="image" name="imageThree" value="<?= $country["imageThree"] ?>" />
        <small id="imageThree" class="form-text text-muted">Formats acceptés : .png .jpeg
        </small>
      </div>
      <div class="form-group">
        <label for="textTwo">Texte 2 :</label>
        <textarea class="form-control" id="textTwo" name="textTwo"><?= $country["textTwo"] ?></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Valider la modification des données
    </button>

  </form>


</body>

</html>