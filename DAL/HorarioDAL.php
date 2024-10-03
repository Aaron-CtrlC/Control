<?php
require_once("AbstractMapper.php");
require_once("Entidades/Horarios.php");
class  HorarioDAL extends AbstractMapper
{


    public function getAllHorarios()
    {

        $consulta = ("SELECT * FROM horarios");
        $this->setConsulta($consulta);
        $listaHorarios = $this->FindAll();
        return $listaHorarios;
    }


    public function findIdHorario($horaActual)
    {
        $consulta = "SELECT idHorarios FROM horarios WHERE '$horaActual' BETWEEN HorarioInicio AND HorarioSalida LIMIT 1";
        $this->setConsulta(consulta: $consulta);
        $id = $this->Find();
        return $id;
    }


    public function doLoad($columna)
    {

        $horarioInicio = isset($columna["HorarioInicio"]) ? new DateTime($columna["HorarioInicio"]) : new DateTime(); // Valor predeterminado es la fecha y hora actual
        $horarioSalida = isset($columna["HorarioSalida"]) ? new DateTime($columna["HorarioSalida"]) : new DateTime(); // Valor predeterminado es la fecha y hora actual
    
        $horario = new Horario(
            $columna["idHorarios"],
            $horarioInicio,
            $horarioSalida
        );

        return $horario;
    }
}
