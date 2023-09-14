<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Crear una aplicación web en la cual se puedan elegir 3 imágenes de manera dinámica dependiendo del valor introducido por el usuario, este será un indicador de desempeño en las ventas.
Si las ventas superan el 80%, se mostrará:
Si las ventas están entre 50% a 79% se mostrará:
De lo contrario, se mostrará: -->
    <h1>Resultado</h1>
    <p>El indicador de ventas es <?php echo $ventas; ?>%.</p>
    <img src="{<?php echo $imagen; ?>}" alt="Imagen de acuerdo al indicador de ventas">
    <?php
    if (isset($_POST['ventas'])) {
        $ventas = $_POST['ventas'];

        if ($ventas > 80) {
            $imagen = ".//caritaGris.webp"; // Ruta de la imagen para más del 80% de ventas
        } elseif ($ventas >= 50 && $ventas <= 79) {
            $imagen = ".//caritaAmarilla.png"; // Ruta de la imagen para ventas entre 50% y 79%
        } else {
            $imagen = ".//caritaRoja.png"; // Ruta de la imagen para ventas por debajo del 50%
        }
    } else {
        // Si no se ha enviado el formulario o no se ha ingresa o un valor, mostrar una imagen predeterminada.
        $imagen = ".//caritaGris.webp";
    }
    ?>
</body>

</html>