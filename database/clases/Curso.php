<?php

class Curso{
  private string $curso;
  private string $alumno;
  private string $preceptora;
  private string $horarios;
  private string $materia;
  private string $turno; 
 /**
   * Get the value of curso
   */
  public function getCurso(): string
  {
    return $this->curso;
  }

  /**
   * Set the value of curso
   */
  public function setCurso(string $curso): self
  {
    $this->curso = $curso;

    return $this;
  }

  /**
   * Get the value of alumno
   */
  public function getAlumno(): string
  {
    return $this->alumno;
  }

  /**
   * Set the value of alumno
   */
  public function setAlumno(string $alumno): self
  {
    $this->alumno = $alumno;

    return $this;
  }

  /**
   * Get the value of preceptora
   */
  public function getPreceptora(): string
  {
    return $this->preceptora;
  }

  /**
   * Set the value of preceptora
   */
  public function setPreceptora(string $preceptora): self
  {
    $this->preceptora = $preceptora;

    return $this;
  }

  /**
   * Get the value of horarios
   */
  public function getHorarios(): string
  {
    return $this->horarios;
  }

  /**
   * Set the value of horarios
   */
  public function setHorarios(string $horarios): self
  {
    $this->horarios = $horarios;

    return $this;
  }

  /**
   * Get the value of materia
   */
  public function getMateria(): string
  {
    return $this->materia;
  }

  /**
   * Set the value of materia
   */
  public function setMateria(string $materia): self
  {
    $this->materia = $materia;

    return $this;
  }

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
}
?>