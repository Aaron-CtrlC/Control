<?php

require_once("DAL/HorarioDAL.php");
class HorarioBLL
{

    public function getHoraActual()
    {
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $horaActual = date( 'H:i');
        return $horaActual;
    }


    public function getIdHora(): mixed
    {
        $horaActual= $this->getHoraActual();

        $horarioDAL = new HorarioDAL();
        $horaActual = $horarioDAL->findIdHorario($horaActual);
        return $horaActual;
    }

    
}

