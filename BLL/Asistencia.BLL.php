<?php
require_once("DAL/AsistenciaDAL.php");
require_once("HorarioBLL.php");
require_once("TurnoBLL.php");
require_once("TipoAsistenciaBLL.php");


class AsistenciaBLL
{

    public function getIdHora()
    {
        $horarioBLL= new HorarioBLL();
        $id= $horarioBLL->getIdHora();
        return $id ;
    }

    public function getIdTurno()
    {
        $turnoBLL= new TurnoBll();
        $id= $turnoBLL->getIdTurnoActual();
        return $id;
    }

    public function tipoAsistenciaId()
    {
        $horarioBLL= new HorarioBLL();
        $horaActual= $horarioBLL->getHoraActual();

        $tipoAsistencia= new TipoAsistenciaBLL();
        $id= $tipoAsistencia->getIdTipoAsistencia($horaActual);
        return $id;
    }



    public function fechaActual()
    {
        $fechaActual= date('Y-m-d');
        return $fechaActual;
    }

    public function GrabarAsistencia($idAlumno): void
    {
        $tipoIdAsistencia= $this->tipoAsistenciaId();
        $fechaActual= $this->fechaActual();
        $turnoId= $this->getIdTurno();
        $horarioId= $this->getIdHora();

        $asistenciaDAL= new AsistenciaDAL();
        $grabarAsistencia= $asistenciaDAL->InsertAsistencia(
            
            $tipoIdAsistencia,
            $idAlumno,
            1,
            1,
            $fechaActual,
            $turnoId,
            $horarioId
        );
    }

    public function GrabarFalta()
    {

    }



}
