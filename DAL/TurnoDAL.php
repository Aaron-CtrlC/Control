<?php
require_once("AbstractMapper.php");
require_once("entidades/Turnos.php");
class TurnoDAL extends AbstractMapper
{

    public function getAllTurnos()
    {
        $consulta = ("SELECT * FROM turnos");

        $this->setConsulta($consulta);
        $listaTurnos = $this->FindAll();
        return $listaTurnos;
    }

    public function findIdTurno($idHora)
    {
        $consulta = "SELECT idHorarios FROM turnos WHERE idHorarios = '$idHora'";
        $this->setConsulta(consulta: $consulta);
        $idTurno = $this->Find();
        return $idTurno;
    }


    public function doLoad($columna)
    {
        $turno = new Turnos(
            $columna["idTurnos"],
            $columna["TipoTurno"]
        );

        return $turno;
    }
}
