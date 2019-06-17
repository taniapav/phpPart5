<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part5 exo8</title>
  </head>
  <body>
    <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
    <?php
    /* On crée un tableau $month
      Les indices sont assignés automatiquemnent */
    $month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
    /* On récupère la taille de notre tableau */
    
    /* La fonction count() va prendre un tableau en argument
      et va retourner le nombre d’éléments de ce tableau. */
    foreach ($month as $months) {
      ?>
      <p><?= $months ?></p>
    <?php }
    ?>
  </body>
</html>
