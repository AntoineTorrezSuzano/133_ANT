<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FilesBulletins</title>
</head>
<body>
<?php
$tab['Modules de compétences en informatique']['106'] = array("Interroger, traiter et assurer la maintenance des bases de données" => 5);
$tab['Modules de compétences en informatique']['117'] = array("Mettre en place l'infrastructure informatique d'une petite entreprise" => 5.5);
$tab['Modules de compétences en informatique']['122'] = array("Automatiser des procédures à l'aide de scripts et de macros" => 4);
$tab['Modules de compétences en informatique']['162'] = array("Analyser et modéliser des données" => 5);
$tab['Modules de compétences en informatique']['164'] = array("Créer des bases de données et y insérer des données" => 4.5);
$tab['Modules de compétences en informatique']['231'] = array("Appliquer la protection et la sécurité des données" => 4.5);
$tab['Modules de compétences en informatique']['319'] = array("Concevoir et implémenter des applications" => 6);
$tab['Modules de compétences en informatique']['431'] = array("Exécuter des mandats de manière autonome dans un environnement" => 3.5);

$tab['Cours Interentrprises']['123'] = array("Activer les services d´un serveur" => 4.5);
$tab['Cours Interentrprises']['187'] = array("Mettre en service un poste de travail ICT avec le système d’exploitation" => 5.5);
$tab['Cours Interentrprises']['216'] = array("Intégrer les terminaux IoE dans une plateforme existante" => 5.5);
$tab['Cours Interentrprises']['293'] = array("Créer et publier un site Web" => 5.5);

$var1 = 0;
$var2 = 0;
foreach (array_values($tab['Modules de compétences en informatique'][]) AS $value){
    $var1++;
    $temp1 += $value;
}
foreach (array_values($tab['Cours Interentrprises']['106']) AS $value){
    echo $value;
}
$moyenne = array("Formation" => ($temp1 / $var1), "CIE" => 0);





    foreach (array_keys($tab['Modules de compétences en informatique']['106']) AS $value){
        echo $value;
        foreach (array_values($tab['Modules de compétences en informatique']['106']) AS $value){
            echo $value;
        }
    }
    //                foreach(array_keys($variables) AS $item){
    //                    echo"<option name=\"destination\" value=\"$variables[$item]\">$item</option>";
    //                }


?>
</body>
</html>