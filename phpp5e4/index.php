<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part5 exo4</title>
  </head>
  <body>
    <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
    <?php
    // on crée un tableau $month
      $month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
      $month[7] = 'âout';
      echo $month[7];

     ?>
  </body>
</html>
