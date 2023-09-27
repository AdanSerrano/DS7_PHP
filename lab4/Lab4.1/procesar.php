<?php
// Obtener el valor de ventas del formulario
$ventas = $_POST['submit'];

// Determinar el indicador de desempeño
if ($ventas > 80) {
    $indicator = "feliz";
    $image = "caritaVerde.png";
} elseif ($ventas >= 50 && $ventas <= 79) {
    $indicator = "regular";
    $image = "caritaAmarilla.png";
} else {
    $indicator = "triste";
    $image = "caritaRoja.png";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Resultado de Desempeño</title>
</head>

<body>

    <div class="content">
        <h1>Resultado de Desempeño</h1>
        <h3>indicador de ventas: <?php echo $indicator; ?></h3>
        <img src="<?php echo $image; ?>" alt="<?php echo $indicator; ?>">
    </div>

</body>

</html>