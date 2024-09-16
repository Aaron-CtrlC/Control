<?php

class Persona{
  private string $nombre;
  private string $apellido;
  private string $dni;
  private string $direccion;
  private string $edad;
  private string $lugar;
  private DateTime $fecha;
  private string $nacionalidad;
  /**
   * Get the value of nombre
   */
  public function getNombre(): string
  {
    return $this->nombre;
  }

  /**
   * Set the value of nombre
   */
  public function setNombre(string $nombre): self
  {
    $this->nombre = $nombre;

    return $this;
  }

  /**
   * Get the value of apellido
   */
  public function getApellido(): string
  {
    return $this->apellido;
  }

  /**
   * Set the value of apellido
   */
  public function setApellido(string $apellido): self
  {
    $this->apellido = $apellido;

    return $this;
  }

  /**
   * Get the value of dni
   */
  public function getDni(): string
  {
    return $this->dni;
  }

  /**
   * Set the value of dni
   */
  public function setDni(string $dni): self
  {
    $this->dni = $dni;

    return $this;
  }

  /**
   * Get the value of direccion
   */
  public function getDireccion(): string
  {
    return $this->direccion;
  }

  /**
   * Set the value of direccion
   */
  public function setDireccion(string $direccion): self
  {
    $this->direccion = $direccion;

    return $this;
  }

  /**
   * Get the value of edad
   */
  public function getEdad(): string
  {
    return $this->edad;
  }

  /**
   * Set the value of edad
   */
  public function setEdad(string $edad): self
  {
    $this->edad = $edad;

    return $this;
  }

  /**
   * Get the value of lugar
   */
  public function getLugar(): string
  {
    return $this->lugar;
  }

  /**
   * Set the value of lugar
   */
  public function setLugar(string $lugar): self
  {
    $this->lugar = $lugar;

    return $this;
  }

  /**
   * Get the value of fecha
   */
  public function getFecha(): DateTime
  {
    return $this->fecha;
  }

  /**
   * Set the value of fecha
   */
  public function setFecha(DateTime $fecha): self
  {
    $this->fecha = $fecha;

    return $this;
  }

  /**
   * Get the value of nacionalidad
   */
  public function getNacionalidad(): string
  {
    return $this->nacionalidad;
  }

  /**
   * Set the value of nacionalidad
   */
  public function setNacionalidad(string $nacionalidad): self
  {
    $this->nacionalidad = $nacionalidad;

    return $this;
  }
} 


?>