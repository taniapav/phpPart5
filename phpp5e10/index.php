<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part5 exo10</title>
  </head>
  <body>
    <p>Avec le tableau de l'exercice 5,
      afficher toutes les valeurs de ce tableau ainsi que les clés associés.
      Cela pourra être, par exemple, de la forme :
      "Le département" + nom du département + "a le numéro" + numéro du département
    </p>
    <?php
    /*On créé un tableau associatif avec array()*/
    $depart = array('02' => 'Aisne', '59' => 'Nord','60'  => 'Oise', '62' => 'Pas-de Calais', '80' => 'Somme');
    /*à chaque tour de boucle la valeur de l’élément actuel
     va être stockée dans la variable $valeur.*/
    foreach($depart as $departNumber => $region){ ?>
      <p>Le departement <?= $region ?>  à le numero  <?= $departNumber ?></p>
        <?php }
     ?>
  </body>
</html>
