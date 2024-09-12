<?php

class Alumno {
 private string $alumno;
 private string $curso;
 private string $preceptora;
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
}

?>