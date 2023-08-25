<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice_CF</title>


    <style>
        *{
            font-family: Calibri;
            text-align:center;
            font-size: 30px;
        }
        table{
            border: 1px solid gray;
            border-collapse: collapse;
            margin-bottom:0;
        }
        td, th{
            width: 250px;
            height: 40px;
        }
        td{
            border: 1px solid rgb(180, 180, 180);

        }
        .LF{
            background-color: rgb(227, 227, 227)
        }
        th{
            background-color: rgb(227, 227, 227)
        }
        p{
            font-size:10px;
            color: rgba(140, 140, 140, 0.28);
            text-align: left;
            margin-top:0;
        }
    </style>
</head>

<body>
<table>
    <tr>
        <th>Clef</th>
        <th>Valeurs</th>
    </tr>
    <?php
        $normies = 0;
        $tab = array("formation" => "ict", "annee" => "2", "matu" => "1", "send_name" =>"envoyer");
        foreach($tab AS $key => $value){
            $normies++;
            echo "<tr>";
            if ($normies%2 == 0){
                echo "<td class='LF'>";
                echo $key;
                echo "</td>";
                echo "<td class='LF'>";
                echo $value;
                echo "</td>";
            } else {
                echo "<td>";
                echo $key;
                echo "</td>";
                echo "<td>";
                echo $value;
                echo "</td>";
            }
            echo "</tr>";

        }

    ?>
</table>
<p>Source : Fabien Olicar</p>
</body>
</html>