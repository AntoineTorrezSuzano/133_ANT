<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice_7</title>
    <style>
        td, table{
            border: 1px solid #000000;

        }
        td{
            width: 30px;
            height: 20px;
            text-align:center;
        }
        .FL {
            background-color: rgb(204, 204, 204);
        }
    </style>
</head>
<body>
    <?php
    echo "<table>";
        for ($h=1;$h <= 12; $h++){
            echo "<tr>";
            if ($h == 1){
                echo "<td class=\"FL\">";
            }else {
                echo "<td class=\"FL\">".$h."</td>";
            }

            for ($w=1;$w <= 12; $w++){
                if ($h == 1){
                    echo "<td class=\"FL\">".$h*$w."</td>";
                } else {
                    echo "<td>".$h*$w."</td>";
                }

            }
            echo "</tr>";
        }
    echo "</table>";


    ?>
</body>
</html>