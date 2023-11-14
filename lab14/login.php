<?php
session_start();

if (isset($_REQUEST['usuario']) && isset($_REQUEST['password'])) {
    $usuario = $_REQUEST['usuario'];
    $password = $_REQUEST['password'];

    $salt = substr($usuario, 0, 2);
    $clave_crypt = crypt($password, $salt);

    require_once('class/usuarios.php');
    $obj_usuarios = new usuarios();
    $usuario_validado = $obj_usuarios->validar_usuario($usuario, $clave_crypt);

    foreach ($usuario_validado as $array_resp) {
        foreach ($array_resp as $value) {
            $nfilas = $value;
        }
    }

    if ($nfilas > 0) {
        $usuario_validado = $usuario;
        $_SESSION['usuario'] = $usuario_validado;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 14</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <?php
    if (isset($_SESSION['usuario'])) {

    ?>

        <h1>Gestion de noticias</h1>
        <hr>
        <ul>
            <li><a href="lab142.php"> Listar Todas las noticias</a></li>
            <li><a href="lab143.php"> Listar noticias por partes</a></li>
            <li><a href="lab144.php"> buscar noticias</a></li>
        </ul>
        <hr>
        <p>[ <a href="logout.php">Desconectar</a> ]</p>
    <?php
    } else if (isset($usuario)) {
        print("<br><br>\n");
        print("<p align='center'>Usuario o clave incorrectos</p>\n");
        print("<p align='center'><a href='login.php'>[conectar]</a></p>");
    } else {
        print("<br><br>\n");
        print("<p class='parrafocentrado' align='center'>esta zona tiene el acceso restringido" . "para entrar debe identificarse</p>\n");
        print("<form class='entrada' name='login' action='login.php' method='post'>\n");
        print("<p><label class='etiqueta-entrada'>Usuario</label>\n");
        print("<input type='text' name='usuario' size='15'></p>\n");
        print("<p><label class='etiqueta-entrada'>Clave:</label>\n");
        print("<input type='password' name='password' size='15'></p>\n");
        print("<p><input type='submit' value='entrar'></p>\n");
        print("</form>\n");

        print("<p class='parrafocentrado'>Nota: si no dispone de identificacion o tiene problemas" . "para entrar <br>Pongase en contacto con el" . "<a href='MALITOS:webmaster@localhost'>Administrador</a> del sitio</p>");
    }
    ?>
</body>ß

</html>