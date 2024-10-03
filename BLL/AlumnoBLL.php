<?php
require_once("DAL/AlumnoDAL.php");
class AlumnoBLL
{
    public function listaAlumnos()
    {
        $alumnoDAL= new AlumnoDAL;
        $listaAlumnos=$alumnoDAL->getAllAlumnos();
        return $listaAlumnos;
    }

    public function listaById()
    {
        $alumnoDAL= new AlumnoDAL();
        $idAlumnos= $alumnoDAL->getAllById();
        return $idAlumnos;
    }

    public function getIdAlumno($dni)
    {
        $alumnoDAL= new AlumnoDAL();
        $id=$alumnoDAL->getIdAlumnoDNI($dni);
        return $id;
    }


}