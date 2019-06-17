<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part5 exo5</title>
  </head>
  <body>
    <p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France 
       et en valeur leur nom.
    </p>
    <?php
    /*On créé un tableau associatif avec array()*/
    $depart = array('02' => 'Aisne', '59' => 'Nord','60'  => 'Oise', '62' => 'Pas-de Calais', '80' => 'Somme');
    /*à chaque tour de boucle la valeur de l’élément actuel
     va être stockée dans la variable $region.*/
    foreach($depart as $index => $region){ ?>
    <!--Pour chaque élément de notre tableau $depart décomposé en tant que clef => region, afficher le texte…-->
    <p><?= $index. ' - ' .$region ?></p>
      <?php }
     ?>
  </body>
</html>

