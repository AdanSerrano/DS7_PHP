<?php
    $diametro = $_POST['diam'];
    $altura = $_POST['altu'];
    $radio = $diametro / 2;
    $pi = 3.14159;
    $volume = $pi * $radio * $radio * $altura;

    echo "El volumen del cilindro es: " . $volume . "metros cubicos ";

?>