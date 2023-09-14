<?php
if (is_uploaded_file($_FILES['MAX_FILE_SIZE']['tmp_name'])) {
    $nombreDirectorio = "archivos/";
    $nombrearchivo = $_FILES['MAX_FILE_SIZE']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;
    if (is_file($nombreCompleto <= 1048576)) {
        $idUnico = time();
        $nombrearchivo = $idUnico . "-" . $nombrearchivo;
        echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
    }
    move_uploaded_file($_FILES['MAX_FILE_SIZE']['tmp_name'], $nombreDirectorio . $nombrearchivo);
    echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
} else
    echo "No se ha podido subir el archivo <br>";
?>
Lab52.html