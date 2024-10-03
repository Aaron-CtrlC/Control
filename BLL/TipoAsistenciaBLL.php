<?php

require_once("HorarioBLL.php");

class TipoAsistenciaBLL
{





    public function getIdMañana($horaActual)
    {
        $id = 0;

        switch (true) {
            case ($horaActual <= '07:45'):
                $id = 3;
                break;
            case ($horaActual >= '08:00' && $horaActual < '10:00'):
                $id = 2;
                break;
            case ($horaActual > '10:00' && $horaActual <= '11:00'):
                $id = 1;
                break;
        }

        return $id;
    }

    public function getIdTarde($horaActual)
    {
        $id = 0;

        switch (true) {
            case ($horaActual <= '13:10'):
                $id = 3;
                break;
            case ($horaActual >= '13:30' && $horaActual < '15:00'):
                $id = 2;
                break;
            case ($horaActual >= '15:00' && $horaActual <= '17:00'):
                $id = 1;
                break;
        }

        return $id;
    }

    public function getIdNoche($horaActual)
    {
        $id = 0;

        switch (true) {
            case ($horaActual <= '18:30'):
                $id = 3;
                break;
            case ($horaActual >= '19:00' && $horaActual < '20:00'):
                $id = 2;
                break;
            case ($horaActual >= '20:00' && $horaActual <= '21:30'):
                $id = 1;
                break;
        }

        return $id;
    }

    public function getIdTipoAsistencia($horaActual)
    {
        $metodo= null;
        switch($horaActual)
        {
            case ($horaActual >= '07:30' && $horaActual< '12:00');
            $metodo= $this->getIdMañana(horaActual: $horaActual);
            break;

            case ($horaActual>='13:00' && '17:30');
            $metodo=$this->getIdTarde($horaActual);
            break;

            case ($horaActual>='17:45' && $horaActual< '22:00');
            $metodo=$this->getIdNoche($horaActual);
            break;
        }
        return$metodo;
    }
}
