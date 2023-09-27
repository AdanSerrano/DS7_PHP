<?php
if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
    $nombreDirectorio = "archivos/";
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;
    $extensionFile = array("jpg", "gif", "png", "doc", "pdf", "zip", "rar", "txt");
    $tamaño = 1048576;

    if (is_file($nombreCompleto <= $tamaño)) {
        $idUnico = time();
        $nombrearchivo = $idUnico . "-" . $nombrearchivo;
        echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";

        $extension = strtolower(pathinfo($nombrearchivo, PATHINFO_EXTENSION));

        if (in_array($extension, $extensionFile)) {
            echo "La extensión del archivo no es válida o no se ha subido ningún archivo <br />";
        } else {
            echo "El archivo ha sido cargado correctamente <br />";
        }
    }
    move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);
    echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
} else
    echo "No se ha podido subir el archivo <br>";
