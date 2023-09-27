<?php
$values = array();
while (count($values) < 20) {
    $numero = rand(1, 100);
    if (!in_array($numero, $values)) {
        $values[] = $numero;
    }
}

$max = max($values);
$position = array_search($max, $values);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Resultado</title>
</head>

<body>
    <h1>Resultado</h1>
    <p>Elemento mayor: <?php echo $max; ?></p>
    <p>Posición del elemento mayor: <?php echo $position; ?></p>
</body>

</html>