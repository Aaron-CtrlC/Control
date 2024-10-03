<?php
require_once("Persona.php");

class Usuario extends Persona
{

    public function __construct(int $id, string $nombre, string $apellido, string $dni, string $direccion, int $edad, string $nacionalidad, DateTime $fechaNacimiento)

    {
        parent::__construct($id,  $nombre,  $apellido,  $dni,  $direccion,  $edad, $nacionalidad, $fechaNacimiento);
    }
}
