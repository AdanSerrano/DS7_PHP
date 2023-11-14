<html LANG="es">

<head>
    <title>Laboratorio 16.1</title>
    <link REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>

<body>
    <h1>Consulta de Servicio Web de Conversión de Temperatura</h1>
    <form NAME="FormConv" METHOD="post" ACTION="lab161.php">
        <br />
        Convertir desde <select NAME="temp">
            <option value="CtoF" SELECTED>°C a °F
            <option value="FtoC">°F a °C
        </select> el valor
        <input TYPE="number" NAME="valor" step="Any" required>
        <input NAME="Convertir" VALUE="Convertir" TYPE="submit" />
    </form>
    <?PHP
    $servicio = "https://www.w3schools.com/xml/tempconvert.asmx?wsdl";
    $parametros = array();
    if (array_key_exists('Convertir', $_POST)) {
        $valor = $_POST['valor'];
        $temp = $_POST['temp'];
        if ($temp == "CtoF") {
            $parametros['Celsius'] = $valor;
            $cliente = new SoapClient($servicio, $parametros);
            $resultObj = $cliente->CelsiusToFahrenheit($parametros);
            $resultado = $resultObj->CelsiusToFahrenheitResult;
        } else {
            $parametros['Fahrenheit'] = $valor;
            $cliente = new SoapClient($servicio, $parametros);
            $resultObj = $cliente->FahrenheitToCelsius($parametros);
            $resultado = $resultObj->FahrenheitToCelsiusResult;
            print("<BR>La temperatura $valor" . substr($temp, 0, 1) . " es igual a: $resultado" . substr($temp, 3, 1));
        }
    }
    ?>
</body>

</html>