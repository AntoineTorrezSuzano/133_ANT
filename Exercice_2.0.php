<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice_2.0</title>
</head>
<body>
    <?php

    $jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    $today = "";
    $time = time();
    $aujourdui = date("D");
    switch ($aujourdui){
        case "Mon" : $today = $jours[0];
            break;
        case "Tue" : $today = $jours[1];
            break;
        case "Wed" : $today = $jours[2];
            break;
        case "Thu" : $today = $jours[3];
            break;
        case "Fri" : $today = $jours[4];
            break;
        case "Sat" : $today = $jours[5];
            break;
        case "Sun" : $today = $jours[6];
            break;
    }
    echo "<p>Nous sommes $today</p>";
    ?>
</body>
</html>