<?php 

class Turno {
 private string $turno;
 private string $tipoTurno;
 /**
  * Get the value of turno
  */
 public function getTurno(): string
 {
  return $this->turno;
 }

 /**
  * Set the value of turno
  */
 public function setTurno(string $turno): self
 {
  $this->turno = $turno;

  return $this;
 }

 /**
  * Get the value of tipoTurno
  */
 public function getTipoTurno(): string
 {
  return $this->tipoTurno;
 }

 /**
  * Set the value of tipoTurno
  */
 public function setTipoTurno(string $tipoTurno): self
 {
  $this->tipoTurno = $tipoTurno;

  return $this;
 }
}
?>