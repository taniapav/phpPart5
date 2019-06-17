<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part5 exo 1</title>
  </head>
  <body>
    <?php
    /*On crée un tableau $month
    Les indices sont assignés automatiquemnent*/
    $month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
    /* On récupère la taille de notre tableau*/
    $tailleM = count($month);
    /* La fonction count() va prendre un tableau en argument
    et va retourner le nombre d’éléments de ce tableau.*/
    for($x = 0; $x < $tailleM; $x++){ ?>
    <p><?= $month[$x] ?></p>
        <?php }
   ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part5 exo1</title>
  </head>
  <body>
    <?php
    /*On crée un tableau $month
    Les indices sont assignés automatiquemnent*/
    $month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
    echo count($month). ' ';
   ?>
  </body>
</html>
