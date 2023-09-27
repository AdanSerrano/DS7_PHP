<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numberButton'];
    function calFactorial($number)
    {
        if ($number == 0) {
            return 1;
        } else {
            return $number * calFactorial($number - 1);
        }
    }
    $factorial = calFactorial($numero);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Resultado del Factorial lab 4.2</title>
</head>

<body>

    <div class="content">
        <h2 style="font-size: 2rem ;">Resultado del Factorial</h2>
        <?php if (isset($factorial)) : ?>
            <p>El factorial de <?php echo $numero; ?> es <?php echo $factorial; ?></p>
        <?php else : ?>
            <p>Ingrese un número válido.</p>
        <?php endif; ?>
    </div>

</body>

</html>