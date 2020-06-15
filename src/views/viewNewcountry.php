<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="src/styles/css/form.css" />

  <title>Ajouter un pays</title>
</head>

<body>
  <div class="header">
    <a href="index.php?url=countries">
      <img src="src/assets/img/back.svg" alt="" />
    </a>
  </div>
  <div class="container">
    <h1 class="title">
      À toi d'ajouter les données grâce à ce formulaire :
    </h1>

    <form class="form" action="index.php?url=countries&action=addcountry" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="country">Pays :</label>
        <input type="text" class="form-control" id="country" name="country" />
      </div>
      <div class="form-group">
        <label for="htag">Htag :</label>
        <input type="text" class="form-control" id="htag" name="htag" />
      </div>
      <div class="form-group">
        <label for="victimsName"> Nom des victimes :</label>
        <textarea type="textIntro" class="form-control" id="victimsName" name="victimsName" /></textarea>
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
        <textarea type="text" class="form-control" id="textIntro" name="textIntro" /></textarea>
      </div>
      <div class="form-group">
        <label for="titleSpeech"> Titre du speech :</label>
        <textarea type="text" class="form-control" id="titleSpeech" name="titleSpeech" /></textarea>
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
      <button type="submit" class="btn btn-primary">
        Envoyer dans l'API
      </button>
    </form>
  </div>
</body>

</html>