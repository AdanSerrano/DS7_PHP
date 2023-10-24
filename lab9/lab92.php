<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 09 - 01</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <h1>Consulta de noticias</h1>
    <form NAME="FormFiltro" METHOD="post" ACTION="1ab92.php">
        <br />
        Filtrar por:<select name="campos">
            <option value="texto" selected>Descripcion
            <option value="titulo">Titulo
            <option value="categoria">categoria
        </select>
        con el valor
        <input TYPE="text" NAME="valor">
        <input NAME="ConsultarFiltros" VALUE="Filtrar Datos" TYPE="submit" />
        <input NAME="ConsultarTodos" VALUE="Ver todos" TYPE="submit" />
    </form>
    <?php
    require_once("class/noticias.php");

    $obj_noticias = new noticias();
    $noticias = $obj_noticias->consultarNoticias();

    if (array_key_exists('ConsultarTodos', $_POST)) {
        $obj_noticias = new noticias();
        $noticias = $obj_noticias->consultarNoticias();
    }

    if (array_key_exists('ConsultarFiltros', $_POST)) {
        $obj_noticias = new noticias();
        $noticias = $obj_noticias->consular_noticias_filtro($_REQUEST['campos'], $_REQUEST['valor']);
    }

    $nfilas = count($noticias);

    if ($nfilas > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Título</th>";
        echo "<th>Texto</th>";
        echo "<th>Categoría</th>";
        echo "<th>Fecha</th>";
        echo "<th>Imagen</th>";
        echo "</tr>";

        foreach ($noticias as $resultado) {
            echo "<tr>";
            echo "<td>" . $resultado['id'] . "</td>";
            echo "<td>" . $resultado['titulo'] . "</td>";
            echo "<td>" . $resultado['texto'] . "</td>";
            echo "<td>" . $resultado['categoria'] . "</td>";
            echo "<td>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</td>";
            if ($resultado['imagen'] != "") {
                echo "<td><a target='_blank' href='img/" . $resultado['imagen'] . "'><img src='img/iconotexto.gif'></a></td>";
            } else {
                echo "<td></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay noticias registradas";
    }
    ?>
</body>

</html>