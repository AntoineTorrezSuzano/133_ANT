<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice_4</title>
</head>
<body>
    <?php

    doubleval ( $rayon = 5 );
    const pi = 3.14159265359;
    $circonference = round((2 * $rayon)* pi, 2);
    $diametre = $rayon * 2;
    $surface = round(($rayon * $rayon) * pi, 2);

    echo "<p>rayon : $rayon</p>";
    echo "<p>diamètre : $diametre</p>";
    echo "<p>circonférence : $circonference</p>";
    echo "<p>surface : $surface</p>";
    ?>
</body>
</html>