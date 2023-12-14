<?php
require_once('modelo.php');

class Products extends ModeloCredencialesBD
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listarProducts()
    {
        $instruccion = "CALL SP_LISTAR_PRODUCTS()";
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

    public function listarServicios()
    {
        $instruccion = "CALL sp_listar_services()";
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

    public function listarUsuarios()
    {
        $instruccion = "CALL SP_LISTAR_USUARIOS()";
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
