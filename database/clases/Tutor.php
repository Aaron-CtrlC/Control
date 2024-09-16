<?php

class Tutor{

private string $alumno;
private string $nombreTutor;
private string $emailTutor;
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
 * Get the value of nombreTutor
 */
public function getNombreTutor(): string
{
return $this->nombreTutor;
}

/**
 * Set the value of nombreTutor
 */
public function setNombreTutor(string $nombreTutor): self
{
$this->nombreTutor = $nombreTutor;

return $this;
}

/**
 * Get the value of emailTutor
 */
public function getEmailTutor(): string
{
return $this->emailTutor;
}

/**
 * Set the value of emailTutor
 */
public function setEmailTutor(string $emailTutor): self
{
$this->emailTutor = $emailTutor;

return $this;
}
}
?>