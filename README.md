# Back-office groupe 6

## Explication pour lancer le back-office (envoyer des données dans la base de donnée) :

1 - Clôner/ Pull ce repository back-office

2 - Lancer le projet sur Mamp/Wamp (Passer par les préférences du logiciel ou bien mettre le dossier du back-office dans htdocs pour mac ou www pour windows)

3 - Aller sur http://localhost:8888/phpMyAdmin/?lang=en

4 - Créer une nouvelle base de donnée en appuyant sur `new`

5 - La nommer `webdoc`

6 - Aller dans l'onglet import et appuyer sur parcourir => Sélectionner la base de donnée ce trouvant dans `data/` du repository du back-office

7 - Aller sur http://localhost:8888/ et selectionner ``

8 - Une page de login doit apparaître, les identifiants :
user : `admin@admin.com`
password : `Reçu par mail le jour de la présentation`

9 - Envoyer les données que vous voulez utilisez en front depuis cette interface

## Explication pour modifier le style du back-office :

1- faire les étapes 1 à 8 de l'explication précedente

2- Dans le shell lancer la commande `yarn install`

3- Puis la commande `yarn start`

4- Pour pouvoir faire des changements dans le style du back-office il y'a besoin de lancer le prépocesseur `node-sass` avec la commande `yarn scss`.
