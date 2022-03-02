# GEIPAN

Évaluation PHP mars 2022 DWWM Vernon, mercredi 2 mars 2022.
Durée de l'évaluation : 7 heures.
Vous disposez d'un accès à internet.
Vous gérez votre temps à votre convenance.
Toute transmission de code est rigoureusement interdite (des vérifications seront faites sur les similarités des fichiers rendus).

## Contexte

À la demande du GEIPAN (Groupe d’étude et d’informations sur les phénomènes aérospatiaux non identifiés), vous devez réaliser le prototype d'une application web permettant à des témoins ayant vu des objets volants non identifiés de déposer en ligne, anonymement ou non, le résultat de leur observation.

## Consignes

### Dépôt

<!-- - vous devrez, dans un premier temps, faire un *fork* du dépôt disponible à l'adresse [https://github.com/fredericnoel/GEIPAN/](https://github.com/fredericnoel/GEIPAN/) sur votre propre compte GitHub, sur lequel vous travaillerez ; -->
- le projet contient déjà une partie du code, l'architecture de l'application ainsi qu'un répertoire (_database) contenant des éléments utiles pour la réalisation de votre épreuve ;
- vous effectuerez vos *commits* dans votre branche *develop* que vous aurez préalablement créée ;
- optionnellement, vous pouvez utiliser le modèle *GitFlow* et travailler sur vos branches *features* ;
- la version définitive de votre application (celle qui sera évaluée), devra être dans votre branche *main* ou *master* ;
- votre dépôt devra être public, vous me communiquerez l'URL à la fin de la journée ;
- vous exporterez au format SQL votre base de données renseignée que vous placerez dans le répertoire _database du projet ;
- vous précisez dans ce même répertoire dans un fichier au format TXT les comptes et mots de passe utilisés pour vos tests ;
- le fichier *.gitignore* peut être modifié si cela est nécessaire. Vous devrez, dans ce cas, le préciser dans un *commit*.

### Répertoire *_datas*

Ce répertoire contient :
- un fichier departement.csv que vous devrez insérer dans votre base de données (dans une table prévue à cet effet).
- le modèle de la base de données à compléter et exporter.
Vous placerez dans ce même répertoire les fichiers annexes demandés précédemment.

### Éléments à réaliser

#### Front

Aucune exigence sur le front. Le répertoire *asset* contient un répertoire pour les feuilles de style (fichier style.css avec import d'un reset.css) et un autre dans lequel figure la dernier version de jQuery. À faire si et seulement si vous avez le temps.

#### Back

Le projet dispose déjà d'une architecture semblable à celle vue en cours, à savoir :
- un index dans lequel l'initialisation de session est effectuée, le chargement automatique des fonctions ainsi que la fonction SPL pour le chargement automatique des classes. Figurent également les inclusions pour les fichiers *head*, *main* et *footer*.
- un répertoire *includes* comprenant
    - footer
    - head
    - home
    - main
    - mentions (mentions légales)
    - nav
- un répertoire *functions* contenant deux fonctions (autoload et inclusion)
- un répertoire *classes* contenant une classe Query avec constructeur et destructeur pour instancier vos objets PDO.

Vous devrez réaliser pour ce projet :
- un processus d'inscription et d'authentification avec les champs classiques (y compris un avatar, pensez à une photo par défaut)
- la possibilité pour un utilisateur connecté ou non de déposer un témoignage avec des informations 
    - date et heure de l'événement
    - durée de l'événement
    - la localisation de l'événement (département, ville en option)
    - direction d'observation (points cardinaux)
    - conditions météologiques
    - un descriptif de l'observation
    - la possibilité de mettre une photo (plusieurs si vous avez le temps)
- la possibilité pour ce même utilisateur, s'il est non inscrit, de créer un compte *a posteriori*
- un processus de vérification d'inscription par mail (lien avec *token*)
- une interface dédiée aux comptes administrateurs permettant de
    - gérer l'ensemble des comptes (validation, suppression, suspension, création)
    - la possibilité de lister les événements par localisation et par date.

## Consignes

- pensez à réutiliser les éléments vus pendant ces semaines de PHP
- privilégiez l'utilisation de fonctions, idéalement de classes
- factorisez au maximum votre code
- si vous bloquez sur un problème, n'y passez pas plusieurs heures
- si vous êtes coincés, vous pouvez me demander de l'aide
- si vous n'allez pas au bout, ce n'est pas grave
- pensez à faire des commits atomiques.