<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/curso.css">
</head>
<?php
require_once("BLL/AlumnoBll.php");
require_once("Entidades/Alumno.php");
$alumnoBLL = new AlumnoBLL();
$lista = $alumnoBLL->listaAlumnos();
$listaId = $alumnoBLL->listaById();
?>

<body>

    <form class="list" method="post" action="../Controladores/ControlAsistencia.php">
        <?php
        foreach ((array) $lista as $alumno) {
            echo '
                <div class="list-item">

                    <p name="tipoUsuario">' . $alumno->getApellido() . " " . $alumno->getNombre() . '</p>
                    <input type="checkbox" name="asistencias[]" value="' . $alumno->getDni() . '" id="' . $alumno->getDni() . '">
                    <input type="hidden" name="alumnos[]" value="' . $alumno->getDni() . '">                </div>

                ';
        }
        ?>
        <input type="submit" style="width: 150px;" value="Grabar Asistencia">

    </form>

</body>






</html>