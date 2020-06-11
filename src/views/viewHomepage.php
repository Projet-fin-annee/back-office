<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/css/homepage.css" />
  <script src="./js/index.js" defer></script>
  <title>Accueil du back-office</title>
</head>

<body>
  <div class="home__layout">
    <h1>Bienvenue sur le back-office !</h1>
    <h3>Quelle donnée veux-tu ajouter dans l'api ?</h3>
    <div class="home__cards">
      <div class="card" style="width: 20rem;">
        <img src="" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">Les pays</h5>
          <p class="card-text">
            C'est ici que tu peux :<br />
            - Ajouter des données d'un nouveau pays :<br />
            → un/des titres<br />
            → un/des textes<br />
            → une/des images<br />
            → une/des videos<br />
            - Modifier pour chaque pays ces mêmes données ou en rajouter<br />
          </p>
          <a href="index.php?url=countries" class="btn btn-primary">Gérer les données</a>
        </div>
      </div>

      <div class="card" style="width: 20rem;">
        <img src="" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">Les définitions</h5>
          <p class="card-text">
            C'est ici que tu peux :<br />
            - Ajouter des données d'une nouvelle définition :<br />
            → le mot que l'ont défini<br />
            → un texte de définition<br />
            - Modifier pour chaque définition ces mêmes données<br />
          </p>
          <a href="index.php?url=definition" class="btn btn-primary">Gérer les données</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>