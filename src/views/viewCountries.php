<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/css/choice.css" />
  <script src="./js/modal.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>Les pays</title>
</head>

<body>
 



<div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Suppression</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Voulez vous vraiment supprimer ce pays ? Cette action sera irréversible ! 
      </div>
      <form class="modal-footer" id="deleteForm" method="post">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-danger" id="deleteCountry">Supprimer</button>
      </form>
    </div>
  </div>
</div>

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
       
      foreach ($countries as $country) :
      ?>
        <div class="card">
          <div class="card-body">
        
            <div id="crossDeleteCountry" class="card-head" data-target="#staticBackdrop" data-toggle="modal" data-countryId=<?= $country["id"]; ?>>
              <img src="assets/img/close.svg" alt="" />
            </div>
            <h5 class="card-title"><?= $country["title"]; ?></h5>
            <p class="card-text">
              C'est ici que tu peux ajouter les données sur ce pays.
            </p>
            <a href="#" class="btn btn-primary">Modifier des données</a>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</body>

</html>