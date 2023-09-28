<?php
require 'identityMatrizGenerator.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N = intval($_POST['orden']);
    $matrixGenerator = new IdentityMatrixGenerator($N);
    $matrixGenerator->generateIdentityMatrix();
    $matriz = $matrixGenerator->getMatrix();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Matriz Identidad</title>
</head>

<body>
    <h1>Matriz Identidad de Orden <?php echo $N; ?></h1>
    <?php if (isset($matriz)) : ?>
        <table border="1">
            <?php foreach ($matriz as $fila) : ?>
                <tr>
                    <?php foreach ($fila as $elemento) : ?>
                        <td><?php echo $elemento; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>

</html>