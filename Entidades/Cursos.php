<?php

class Cursos
{
    private int $ano;
    private string $division;
    private string $especialidad;

    public function __construct(int $ano, string $division, string $especialidad)
    {
        $this->ano= $ano;
        $this->division= $division;
        $this->especialidad= $especialidad;
    }
    /**
     * Get the value of ano
     */
    public function getAno(): int
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno(int $ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of division
     */
    public function getDivision(): string
    {
        return $this->division;
    }

    /**
     * Set the value of division
     */
    public function setDivision(string $division): self
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get the value of especialidad
     */
    public function getEspecialidad(): string
    {
        return $this->especialidad;
    }

    /**
     * Set the value of especialidad
     */
    public function setEspecialidad(string $especialidad): self
    {
        $this->especialidad = $especialidad;

        return $this;
    }
}
