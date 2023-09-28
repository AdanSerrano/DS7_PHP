<?php
require 'RandomNumberGenerator.php';
$generator = new RandomNumberGenerator();
$generator->generateUniqueNumbers(20, 1, 100);
$max = $generator->findMax();
$position = $generator->findMaxPosition();
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