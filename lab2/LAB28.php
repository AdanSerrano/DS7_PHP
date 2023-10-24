<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.8</title>
</head>

<body>
    <?php
    $position = "arriba";
    switch($position){
        case "arriba":
            echo "arriba";
            break;

        case "abajo":
            echo "abajo";
            break;

        default: 
            echo "no se encontro";
            break;
        
    }
    ?>
</body>

</html>