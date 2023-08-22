<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice_5</title>
</head>
<body>
    <?php
        $time = time();

        $seconds =  date("s", $time);
        echo $seconds;
        if (($seconds % 2) == 0){
            echo "<p>pair</p>";
        } else {
            echo "<p>impair</p>";
        }



    ?>
</body>
</html>