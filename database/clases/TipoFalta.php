<?php

class TipoFalta {

private string $idTipoFalta;
private string $tipoFalta;

/**
 * Get the value of idTipoFalta
 */
public function getIdTipoFalta(): string
{
return $this->idTipoFalta;
}

/**
 * Set the value of idTipoFalta
 */
public function setIdTipoFalta(string $idTipoFalta): self
{
$this->idTipoFalta = $idTipoFalta;

return $this;
}

/**
 * Get the value of tipoFalta
 */
public function getTipoFalta(): string
{
return $this->tipoFalta;
}

/**
 * Set the value of tipoFalta
 */
public function setTipoFalta(string $tipoFalta): self
{
$this->tipoFalta = $tipoFalta;

return $this;
}
}

?>