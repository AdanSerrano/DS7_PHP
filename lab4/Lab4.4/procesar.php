<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = $_POST['cantidadNum'];

    $arregloPares = array();
    $contador = 0;

    function esPar($numero)
    {
        return $numero % 2 == 0;
    }

    while ($contador < $cantidad) {
        $valor = intval(readline("Ingrese un número par: "));

        if (esPar($valor)) {
            $arregloPares[] = $valor;
            $contador++;
        } else {
            echo "El número ingresado no es par. Por favor, ingrese un número par.\n";
        }
    }

    echo "Arreglo de números pares: ";
    print_r($arregloPares);
}
