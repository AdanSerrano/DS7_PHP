<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Matriz</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="display: flex; flex-direction:column; align-items: center; justify-content:center; height: 100%;">
    <h1>Resultado de la Matriz</h1>

    <?php
    // Obtén el número ingresado por el usuario
    $numero = $_POST['numero'];

    // Verifica si el número es par
    if ($numero % 2 != 0) {
        echo "<p>El número ingresado no es par. Por favor, ingrese un número par.</p>";
    } else {
        $matriz = array();
        for ($n1 = 0; $n1 < $numero; $n1++) {
            for ($n2 = 0; $n2 < $numero; $n2++) {
                if (($n1 == 0 && $n2 == 0) || ($n1 == 0 && $n2 == $numero - 1) || ($n1 == $numero - 1 && $n2 == 0) || ($n1 == $numero - 1 && $n2 == $numero - 1)) {
                    $matriz[$n1][$n2] = rand(1, 100);
                } else {
                    $matriz[$n1][$n2] = 0;
                }
            }
        }

        $esquina_superior_izquierda = $matriz[0][0];
        $esquina_superior_derecha = $matriz[0][$numero - 1];
        $esquina_inferior_izquierda = $matriz[$numero - 1][0];
        $esquina_inferior_derecha = $matriz[$numero - 1][$numero - 1];

        $suma_esquinas = $esquina_superior_izquierda + $esquina_superior_derecha + $esquina_inferior_izquierda + $esquina_inferior_derecha;
        $multiplicacion_esquinas = $esquina_superior_izquierda * $esquina_superior_derecha * $esquina_inferior_izquierda * $esquina_inferior_derecha;

        echo "<h2>Matriz creada:</h2>";
        echo "<table border='1' style='background-color:black; color: white; font-size: 24px;'>";
        for ($n1 = 0; $n1 < $numero; $n1++) {
            echo "<tr style='padding:8px; gap:8px;'>";
            for ($n2 = 0; $n2 < $numero; $n2++) {
                echo "<td style='padding:1rem; text-align:center;'>" . $matriz[$n1][$n2] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "<h3>Suma de las esquinas: $suma_esquinas</h3>";
        echo "<h3>Multiplicación de las esquinas: $multiplicacion_esquinas</h3>";
    }
    ?>

    <button type="submit" onclick="mostrarAlerta()" style="color: black; text-decoration:none; padding:.5rem;">Vuelve a intentarlo perrillo</button>


    <script>
        function mostrarAlerta() {
            alert("Intenta con otro tamaño de matriz");
            window.location.href = "index.html";
        }
    </script>
</body>

</html>