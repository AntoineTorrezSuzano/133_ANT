<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice_2.3</title>
    <style>
        *{

        }
        body{
            background: rgb(35, 33, 56);
        }
        h1, h3{
            color:white;
        }
        button{
            background-color: bisque;
        }
        table{
            color:white;

        }
    </style>
</head>
<body>
<h1>Choose a day</h1>
<form name="form" action="" method="get">
    <input type="date" id="DATEINPUT">


</form>



<?php

    $date = time();
    $minus = 0;

    $jours = Array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");



    switch (date("D", $date)){
        case "Mon" : $minus = 0; ;
            break;
        case "Thu" : $minus = 1; ;
            break;
        case "Wed" : $minus = 2; ;
            break;
        case "Thu" : $minus = 3; ;
            break;
        case "Fri" : $minus = 4; ;
            break;
        case "Sat" : $minus = 5; ;
            break;
        case "Sun" : $minus = 6; ;
            break;
    }
    echo "<table> ";
    for ($i=0; $i<7; $i++){
        $chadate = $date -(($minus-$i) * 86400);
        echo "<tr>";
        echo "<td>";
        echo $jours[$i];
        echo "</td>";
        echo "<td>";
        echo date(": d-m-Y" , $chadate);
        echo "</td>";
        echo "</tr>";

    }
?>
</body>
</html>