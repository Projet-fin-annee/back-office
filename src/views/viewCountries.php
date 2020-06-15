<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="src/styles/css/choice.css" />
  <script src="src/js/modal.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>Les pays</title>
</head>

<body>
  <!-- modal -->
  <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Supprimer le pays</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Veux-tu vraiment supprimer ce pays ? Cette action sera irréversible.
        </div>
        <form class="modal-footer" id="deleteForm" method="post">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-danger" id="deleteCountry">Supprimer</button>
        </form>
      </div>
    </div>
  </div>

  <!-- toast -->
  <?php if ($actionTitle) : ?>
    <div class="toast" style="position: absolute; top: 20px; right: 20px;" data-delay="2500">
      <div class="toast-header">
        <strong class="mr-auto">Success</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        <?= $actionTitle ?>
      </div>
    </div>
  <?php endif ?>


  <!-- card list -->
  <div class="header">
    <a href="index.php?url=home">
      <img src="src/assets/img/back.svg" alt="" />
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
              <img src="src/assets/img/more.svg" alt="" /></a>
          </div>
        </div>
      </div>
      <?php

      foreach ($countries as $country) :
      ?>
        <div class="card">
          <div class="card-body">

            <div id="crossDeleteCountry" class="card-head" data-target="#staticBackdrop" data-toggle="modal" data-countryId=<?= $country["id"]; ?>>
              <img src="src/assets/img/close.svg" alt="" />
            </div>
            <h5 class="card-title"><?= $country["country"]; ?></h5>
            <p class="card-text">
              C'est ici que tu peux ajouter les données sur ce pays.
            </p>
            <form action="index.php?url=updateCountry&id=<?= $country["id"]  ?>" method="post">
              <button type="submit" class=" btn btn-primary">Modifier des données</button>
            </form>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  </div>
</body>

</html>