<?php

require_once("BLL/Asistencia.BLL.php");
require_once("BLL/AlumnoBLL.php");
if (isset($_POST["alumnos"])) {




    $alumnos = $_POST["alumnos"];
    $alumnoBLL= new AlumnoBLL();
    $asistenciaBLL= new AsistenciaBLL();
    $asistencias = isset($_POST["asistencia"]) ? $_POST["asistencia"] : [];


    foreach ($alumnos as $dni) {
        if (in_array($dni, $asistencias)) {
            $idAlumno=$alumnoBLL->getIdAlumno(dni: $dni);
            $asistenciaBLL->GrabarAsistencia($idAlumno);
            
        } else {
            $idAlumno=$alumnoBLL->getIdAlumno(dni: $dni);
            echo "$idAlumno";
        }
    }

    // $asistenciaBll = new AsistenciaBLL();
    // $asistenciaBll->GrabarAsistencia($asistencias, $faltas);
}
