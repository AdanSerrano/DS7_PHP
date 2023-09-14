<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Indicador de Ventas</h1>
    <form action="procesar.php" method="POST">
        <label for="ventas">Porcentaje de Ventas:</label>
        <input type="number" name="ventas" id="ventas" min="0" max="100" required>
    </form>
</body>

</html>