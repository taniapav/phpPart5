<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part5 exo1</title>
  </head>
  <body>
    <p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>
    <?php
    // on crée un tableau $month
      $month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
      echo 'La valeur de la troisième ligne de ce tableau est ' .$month[2];
     ?>
  </body>
</html>
