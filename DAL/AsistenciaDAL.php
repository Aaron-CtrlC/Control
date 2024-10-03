<?php

require_once("AbstractMapper.php");
require_once("Entidades/Asistencia.php");

class AsistenciaDAL extends AbstractMapper
{




    public function InsertAsistencia($tipoAsistencia,$idAlumno,$idCurso,$idPreceptora,$fechaActual,$idTurno,$idHorario)
    {

        $consulta = "INSERT INTO asistencias (idAsistencias, idAlumno, idCurso, idPreceptora, FechaAsistencia, idTurno, idHorario) 
        VALUES ($tipoAsistencia, $idAlumno, $idCurso, $idPreceptora, '$fechaActual', $idTurno, $idHorario)";
        $this->setConsulta(consulta: $consulta);
        $id=$this->Execute();
        return $id;
    }

    public function getAllAsistencias()
    {
        $consulta= ("SELECT * FROM asistencias");
        $this->setConsulta($consulta);
        $listaHorarios= $this->FindAll();
        return $listaHorarios;
    }

    public function doLoad($columna)
    {
        $asistencia = new Asistencia(
                $columna["idAsistencias"],
            $columna["FechaAsistencia"],
            $columna["HoraAsistencia"]
        );
        return $asistencia;
    }
}
