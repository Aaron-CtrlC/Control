<?php 
  
class Preceptora{

private string $preceptora;
private string $curso;
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
}
?>