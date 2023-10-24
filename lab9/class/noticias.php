<?php
require_once('modelo.php');

class noticias extends modeloCredencialesBD
{
    protected $TITULO;
    protected $TEXTO;
    protected $CATEGORIA;
    protected $FECHA;
    protected $IMAGEN;

    public function __construct()
    {
        parent::__construct();
    }

    public function consultarNoticias()
    {
        $instruccion = "call sp_listar_noticias()";
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
    public function consular_noticias_filtro()
    {
        $instruccion = "call sp_listar_noticias_filtro()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if ($resultado) {
            return $resultado;
            $consulta->close();
            $this->_db->close();
        }
    }
}
