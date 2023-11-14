<?php
require_once('modelo.php');

class usuarios extends modeloCredencialesBD
{

    public function __construct()
    {
        parent::__construct();
    }

    public function validar_usuario($usr, $pwd)
    {
        $instruccion = "call SP_VALIDAR_USUARIO()";

        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Error al consultar las noticias";
        } else {
            return $resultado;
            $consulta->close();
            $this->_db->close();
        }
    }
}
