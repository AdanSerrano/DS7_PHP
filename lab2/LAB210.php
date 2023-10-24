<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.10</title>
</head>

<body>
    <?php
    $persona = array(
        array ("nombre"=> "rosa", "estatura" => 198, "sexo" => "femenino"),
        array ("nombre"=> "juan", "estatura" => 178, "sexo" => "masculino"),
        array ("nombre"=> "maria", "estatura" => 168, "sexo" => "femenino"),
        array ("nombre"=> "pedro", "estatura" => 180, "sexo" => "masculino"),
    );
    echo "<b>Datos Sobre el personal</b><br>";
    $numPersonas = count($persona); 

    for( $i = 0; $i < $numPersonas; $i++){
        echo "nombre: <br>", $persona[$i]['nombre'], "</b><br>";
    }
    ?>
</body>

</html>