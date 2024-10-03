<?php
require_once("AbstractMapper.php");
require_once("Entidades/TiposFaltas.php");
class TipoFaltDAL extends AbstractMapper
{
    public function getAllTiposAsistencias()
    {
        $consulta= ("SELECT * FROM tiposasistencias");
        $this->setConsulta($consulta);
        $id= $this->FindAll();
        return $id;
    }

    public function doLoad($columna)
    {
        $tipoFalta = new TiposFaltas(
            $columna["idTipoAsistencia"],
            $columna["TipoFalta"]
        );
        return $tipoFalta;
    }
}
