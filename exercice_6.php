<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice_6</title>
</head>
<body>
    <?php
        $temps = time();

        $mois =  date("m", $temps);

        switch ($mois){

            case 1:
                echo "<p>Janvier</p>";
                break;
            case 2:
                echo "<p>Février</p>";
                break;
            case 3:
                echo "<p>Mars</p>";
                break;
            case 4:
                echo "<p>Avril</p>";
                break;
            case 5:
                echo "<p>Mai</p>";
                break;
            case 6:
                echo "<p>Juin</p>";
                break;
            case 7:
                echo "<p>Juillet</p>";
                break;
            case 8:
                echo "<p>Août</p>";
                break;
            case 9:
                echo "<p>Septembre</p>";
                break;
            case 10:
                echo "<p>Octobre</p>";
                break;
            case 11:
                echo "<p>Novembre</p>";
                break;
            case 12:
                echo "<p>Décembre</p>";
                break;
        }


    ?>
</body>
</html>