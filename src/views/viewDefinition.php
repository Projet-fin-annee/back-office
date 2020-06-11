<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/css/choice.css" />
  <title>Les définitions</title>
</head>

<body>
  <div class="header">
    <a href="index.php">
      <img src="assets/img/back.svg" alt="" />
    </a>
  </div>
  <div class="container">
    <h1 class="title">
      Voici toutes les mots, sélectionne celui que tu veux modifier dans l'API
      ou ajoute-en un nouveau :
    </h1>
    <div class="row">
      <div class="card add-card">
        <div class="card-body">
          <div>
            <a class="img-container" href="index.php?url=newdefinition">
              <img src="assets/img/more.svg" alt="" /></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Manifestation</h5>
          <p class="card-text">
            C'est ici que tu peux modifier la définition de ce mot.
          </p>
          <a href="" class="btn btn-primary">Modifier des données</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Racisé</h5>
          <p class="card-text">
            C'est ici que tu peux modifier la définition de ce mot.
          </p>
          <a href="#" class="btn btn-primary">Modifier des données</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>