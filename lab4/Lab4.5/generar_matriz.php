<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N = intval($_POST['orden']);

    if ($N % 2 != 0) {
        echo "El valor de N debe ser un número par.";
        exit;
    }

    $matriz = array();

    for ($i = 0; $i < $N; $i++) {
        $fila = array();
        for ($j = 0; $j < $N; $j++) {
            if ($i == $j) {
                $fila[] = 1;
            } else {
                $fila[] = 0;
            }
        }
        $matriz[] = $fila;
    }
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