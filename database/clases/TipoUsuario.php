<?php

class TipoUsuario{

private string $preceptor;
private string $superPreceptor;
private string $administrador;
private string $idTipoUsuario;


/**
 * Get the value of preceptor
 */
public function getPreceptor(): string
{
return $this->preceptor;
}

/**
 * Set the value of preceptor
 */
public function setPreceptor(string $preceptor): self
{
$this->preceptor = $preceptor;

return $this;
}

/**
 * Get the value of superPreceptor
 */
public function getSuperPreceptor(): string
{
return $this->superPreceptor;
}

/**
 * Set the value of superPreceptor
 */
public function setSuperPreceptor(string $superPreceptor): self
{
$this->superPreceptor = $superPreceptor;

return $this;
}

/**
 * Get the value of administrador
 */
public function getAdministrador(): string
{
return $this->administrador;
}

/**
 * Set the value of administrador
 */
public function setAdministrador(string $administrador): self
{
$this->administrador = $administrador;

return $this;
}

/**
 * Get the value of idTipoUsuario
 */
public function getIdTipoUsuario(): string
{
return $this->idTipoUsuario;
}

/**
 * Set the value of idTipoUsuario
 */
public function setIdTipoUsuario(string $idTipoUsuario): self
{
$this->idTipoUsuario = $idTipoUsuario;

return $this;
}
}
?>