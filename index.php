<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shoes on fit</title>
</head>

<body>
  <h1>Shoes on fit</h1>
  <?php
  $price = 40;
  echo "Ma chaussure coûte " . $price . "€ !";
  define("COLOR", "white");

  $price = 39;
  $models = ["J4", "Air Max", "1995", "Blazer"];

  /* echo "<pre>";
  print_r($models);
  echo "</pre>"; */
  foreach ($models as $model) {
    echo "<h3>$model</h3>";
  }

  echo "Ma paire préférée est " . $models[3];

  $cart = [
    "J4" => 5,
    "Air Max" => 10,
    "Blazer" => 1,
    "1995" => 5,
  ];

  echo "<h2>Mon panier</h2>";

  echo "<p>Votre panier contient " . count($cart) . " articles différents !</p>";
  foreach ($cart as $item => $quantity) {
    echo "<p>$item x $quantity</p>";
  }

  echo "<pre>";
  print_r($cart);
  echo "</pre>";


  /* $userName = "Nicolas";
  $email = "nicolas@nicolas.fr";

  // echo "<h2>Bienvenue " . $userName . " !</h2>";
  echo "<h2>Bienvenue $userName !</h2>";
  echo "<p>Vous vous êtes connecté avec l'adresse e-mail suivante : $email</p>";

  echo "Ma chaussure coûte " . $price . "€ et est de couleur " . COLOR . " !"; */
  ?>
</body>

</html>