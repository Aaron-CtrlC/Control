<?php 

class Usuario{
private string $TipoUs;
private string $email;
private string $contrasena;
/**
 * Get the value of TipoUs
 */
public function getTipoUs(): string
{
return $this->TipoUs;
}

/**
 * Set the value of TipoUs
 */
public function setTipoUs(string $TipoUs): self
{
$this->TipoUs = $TipoUs;

return $this;
}

/**
 * Get the value of email
 */
public function getEmail(): string
{
return $this->email;
}

/**
 * Set the value of email
 */
public function setEmail(string $email): self
{
$this->email = $email;

return $this;
}

/**
 * Get the value of contrasena
 */
public function getContrasena(): string
{
return $this->contrasena;
}

/**
 * Set the value of contrasena
 */
public function setContrasena(string $contrasena): self
{
$this->contrasena = $contrasena;

return $this;
}
}
?>