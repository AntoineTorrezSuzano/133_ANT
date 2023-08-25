<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Swiss Airport</title>
    <style>
        th{
            font-size:25px;
            text-align:left;
        }
        .info{
            font-weight: bold;
            width:auto;
        }
        .espace{
            height:20px;
        }
        .date, .ville{
            height:25px;
            width:175px;
        }
        .ville{
            height:25px;
            width:125px;
        }
        .personne{
             width : 60px;
            height:20px;
        }
        .ville, .date, .personne{
            border:1px solid rgb(194, 194, 194);
        }

        button, img{
            display:blocK;
            margin-left: auto;
            margin-right: auto;
        }
    </style>


<?php
    $time = time();
    $today = $time;
    $tomorrow = $time+86400;
    $default_city = "Genève";


?>

</head>
<body>

<img src="logo-swiss-2x.png">
<br><br>
<form action="result.php" method="post">

<table class="haute">
    <tr>
        <th></th>
        <th colspan="2">Réservez votre vol</th>
        <th></th>
    </tr>
    <tr>
        <td class="espace"></td>
        <td class="espace"></td>
        <td class="espace"></td>
        <td class="espace"></td>

    </tr>


    <tr>
        <td class="info "><label>De</label></td>
        <td class="inputgang "><select class="ville" name="depart" ><?php  echo"<option selected=\"selected\" name=\"depart\" value=\"GNV\" >$default_city</option>";
                $listairport = "liste.txt";
                $lines = file($listairport);
                unset($lines[0]);
                unset($lines[1]);
                for ($i = 68; $i<74; $i++){
                    unset($lines[$i]);
                }

                foreach ($lines as $line) {
                    $tempArray = explode( " ", $line ); //Note the space after the ":", because
                    //values are stored with this format.
                    $variables[$tempArray[0]] = $tempArray[1];
                }

                foreach(array_keys($variables) AS $item){
                    echo"<option name=\"depart\" value=\"$variables[$item]\">$item</option>";
                }


                ?></select></td>

        <td class="info "><label>À</label></td>
        <td class="inputgang "><select class="ville" name="destination">
                <?php
                foreach(array_keys($variables) AS $item){
                    echo"<option name=\"destination\" value=\"$variables[$item]\">$item</option>";
                }

                ?>
            </select></td>
    </tr>


    <tr>
        <td class="info"><label>Vol Aller</label></td>
        <td class="inputgang"><input type="date" class="date" value="<?php echo date('Y-m-d', $today); ?>" name="date_depart"></td>
        <td class="info"><label >Vol Retour</label></td>
        <td class="inputgang"><input type="date" class="date" value="<?php echo date('Y-m-d', $tomorrow); ?>" name="date_arrivee"></td>
    </tr>

    <tr>
        <td class="espace"></td>
        <td class="espace"></td>
        <td class="espace"></td>
        <td class="espace"></td>

    </tr>
    <?php

    ?>
    <tr>
        <td class="info"><label>Adultes</label></td>
        <td class="inputgang "><input type="number" class="personne" value="1" name="cat_1" min="1" max="4"></td>

    </tr>
    <tr>
        <td class="info "><label>Enfants</label></td>
        <td class="inputgang "><input type="number" class="personne" value="0" name="cat_2" min="0" max="4"></td>

    </tr>
    <tr>
        <td class="info "><label>Bébés</label></td>
        <td class="inputgang "><input type="number" class="personne" value="0" name="cat_3" min="0" max="4"></td>

    </tr>
</table>
<input type="checkbox" name="reserver_siege"><label>Réserver votre siège ? </label>
<br><br>
<button type="submit" value="Rechercher votre Vol" name="rechercher">Rechercher votre vol</button>

</form>
<?php






?>
</body>
</html>