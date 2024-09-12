<?php 

class Asistencia{
 
private string $fechaAsistencia;
      
/**
 * Get the value of fechaAsistencia
 */
public function getFechaAsistencia(): string
{
return $this->fechaAsistencia;
}

/**
 * Set the value of fechaAsistencia
 */
public function setFechaAsistencia(string $fechaAsistencia): self
{
$this->fechaAsistencia = $fechaAsistencia;

return $this;
}
}

?>
