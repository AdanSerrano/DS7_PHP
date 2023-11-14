<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconectar</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <?php
    if (isset($_SESSION["usuario_valido"])) {
        session_destroy();
        print("<br><br><p align='center'>Conexion Fallida</p>\n");
        print("<p align='center'><a href='login.php'>[conectar]</a></p>\n");
    } else {
        print("<br><br><p align='center'>No hay ninguna sesion iniciada</p>\n");
        print("<p align='center'>[<a href='login.php'>[conectar]</a>]</p>\n");
    }

    ?>
</body>

</html>