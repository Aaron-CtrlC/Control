<?php

declare(strict_types=1);
require_once("AbstractMapper.php");
require_once("Entidades/Alumno.php");
class AlumnoDAL extends AbstractMapper
{

    public function getAllAlumnos()
    {
        $consulta = "SELECT * FROM alumnos";
        $this->setConsulta(consulta: $consulta);
        $listaAlumnos = $this->FindAll();
        return $listaAlumnos;
    }

    public function getAllById()
    {
        $consulta = "SELECT idAlumno FROM alumnos; ";
        $this->setConsulta($consulta);
        $idAlumnos = $this->Execute();
        return $idAlumnos;
    }


    public function  getIdAlumnoDNI($dni)
    {
        $consulta = ("SELECT idAlumno FROM alumnos WHERE DNI = '$dni' ");
        $this->setConsulta($consulta);
        $id = $this->Find();
        return $id;
    }

    public function doLoad($columna)
    {
        $idAlumno = (int)$columna["idAlumno"];
        $fechaNacimiento = new DateTime(datetime: $columna["FechaNacimiento"]);
        $edad = (int)$columna["Edad"];

        $alumno = new Alumno(
            $idAlumno,
            $columna["Nombre"],
            $columna["Apellido"],
            $columna["DNI"],
            $columna["Direccion"],
            $edad,
            $columna["Nacionalidad"],
            $fechaNacimiento
        );
        return $alumno;
    }
}
