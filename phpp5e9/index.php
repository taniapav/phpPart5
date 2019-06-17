<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part5 exo9</title>
  </head>
  <body>
    <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
    <?php
    /*On créé un tableau associatif avec array()*/
    $depart = array('02' => 'Aisne', '59' => 'Nord','60'  => 'Oise', '62' => 'Pas-de Calais', '80' => 'Somme');
    /*à chaque tour de boucle la valeur de l’élément actuel
     va être stockée dans la variable $region.*/
    foreach($depart as $region){ ?>
    <p><?= $region ?></p>
      <?php }
     ?>
  </body>
</html>
