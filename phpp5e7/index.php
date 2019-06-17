<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part5 exo6</title>
  </head>
  <body>
    <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
    <?php
    /*On créé un tableau associatif avec array()*/
    $depart = array('02' => 'Aisne', '59' => 'Nord','60'  => 'Oise', '62' => 'Pas-de Calais', '80' => 'Somme');
    /*array_push($depart, 51 => 'Marne');*/
    $depart[51] = 'Marne';
    foreach($depart as $index => $region){ ?>
      <p><?= $index. ' - ' .$region ?></p>
  <?php }
     ?>
  </body>
</html>
