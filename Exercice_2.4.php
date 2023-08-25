<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice boucle FOREACH</title>
</head>
<body>
<table>
    <tbody>
        <tr>
            <th>Clef</th>
            <th>Valeur</th>
        </tr>
    <?php
    $tab = array("nom" => "Antoine", "prenom" => "Torrez Suzano", "adress" => "Rue Saint-Germain 6", "npa" => "2740", "ville" => "Moutier", "email" => "antoine.torrezsuzano@ceff.ch");
    foreach ($tab AS $key => $value){
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }


    ?>
    </tbody>
</table>

</body>
</html>