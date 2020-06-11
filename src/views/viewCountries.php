<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/css/bo-choice.css" />
  <title>Les pays</title>
</head>

<body>
  <div class="header">
    <a href="index.php">
      <img src="assets/img/back.svg" alt="" />
    </a>
  </div>
  <div class="container">
    <h1 class="title">
      Voici tout les pays, sélectionne celui que tu veux modifier dans l'api
      ou ajoute-en un nouveau :
    </h1>
    <div class="row">
      <div class="card add-card">
        <div class="card-body">
          <div>
            <a class="img-container" href="index.php?url=newcountry">
              <img src="assets/img/more.svg" alt="" /></a>
          </div>
        </div>
      </div>
      <?php
      foreach ($country->country() as $key => $country) :
      ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $country->countryname(); ?></h5>
            <p class="card-text">
              C'est ici que tu peux ajouter les données sur ce pays.
            </p>
            <a href="#" class="btn btn-primary">Modifier des données</a>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Brésil</h5>
          <p class="card-text">
            C'est ici que tu peux ajouté les données sur ce pays.
          </p>
          <a href="#" class="btn btn-primary">Modifier des données</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Canada</h5>
          <p class="card-text">
            C'est ici que tu peux ajouté les données sur ce pays.
          </p>
          <a href="#" class="btn btn-primary">Modifier des données</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>