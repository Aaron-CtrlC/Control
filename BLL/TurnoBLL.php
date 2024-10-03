<?php

require_once("HorarioBLL.php");
require_once("DAL/TurnoDAL.php");

class  TurnoBll
{

public function getIdHoraActual()
{
    $HorarioDAL= new HorarioBLL();
    $id= $HorarioDAL->getIdHora();
    return $id;
}

public function getIdTurnoActual(): mixed
{
    $idHora= $this->getIdHoraActual();
    
    $turnoDAL= new TurnoDAL();
    $idTurno= $turnoDAL->findIdTurno($idHora);
    return $idTurno;
}


}