<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo DataTable JQuery</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="./librerias/jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="./librerias/jquery-3.1.1.js"></script>
    <script type="text/javascript" language="javascript" src="./librerias/jquery.dataTables.min.js"></script>

</head>

<body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#grid').DataTable({
                "lengthMenu": [5, 10, 20, 50],
                "order": [
                    [0, "asc"]
                ],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrada de _MAX_ registros)",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "No se encontraron registros coincidentes",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior",
                        "first": "Primera",
                        "last": "Última",
                    },
                }
            });

            $("*").css("font-family", "arial").css("font-size", "12px");
        })
    </script>
    <h1>Consulta de noticias</h1>
    <?php
    require_once("class/noticias.php");

    $obj_noticias = new noticias();
    $noticias = $obj_noticias->consultarNoticias();

    $nfilas = count($noticias);

    if ($nfilas > 0) {
        print("<table id='grid' class='display' cellspacing='0'>\n");
        print("<thead>\n");
        print("<tr>\n");
        print "<table>";
        print "<tr>";
        print "<th>id</th>";
        print "<th>Título</th>";
        print "<th>Texto</th>";
        print "<th>Categoría</th>";
        print "<th>Fecha</th>";
        print "<th>Imagen</th>";
        print "</tr>";
        print("</thead>\n");
        print("<tbody>\n");

        foreach ($noticias as $resultado) {
            print "<tr>";
            print "<td>" . $resultado['id'] . "</td>";
            print "<td>" . $resultado['titulo'] . "</td>";
            print "<td>" . $resultado['texto'] . "</td>";
            print "<td>" . $resultado['categoria'] . "</td>";
            print "<td>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</td>";
            if ($resultado['imagen'] != "") {
                print "<td><a target='_blank' href='img/" . $resultado['imagen'] . "'><img src='img/iconotexto.gif'></a></td>";
            } else {
                print "<td></td>";
            }
            print "</tr>\n";
            print("</tbody>");
        }
        print "</table>";
    } else {
        print "No hay noticias registradas";
    }
    ?>
</body>

</html>