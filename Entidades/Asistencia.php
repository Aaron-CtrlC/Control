<?php

class Asistencia
{
    private int $idAsistencia;
    private DateTime $fechaAsistencia;

    private DateTime $horaAsistencia;
    public function __construct(int $idAsistencia, DateTime $fechaAsistencia, DateTime $horaAsistencia)
    {
        $this->idAsistencia = $idAsistencia;
        $this->fechaAsistencia = $fechaAsistencia;
        $this->horaAsistencia = $horaAsistencia;
    }


    /**
     * Get the value of idAsistencia
     */
    public function getIdAsistencia(): int
    {
        return $this->idAsistencia;
    }

    /**
     * Set the value of idAsistencia
     */
    public function setIdAsistencia(int $idAsistencia): self
    {
        $this->idAsistencia = $idAsistencia;

        return $this;
    }

    /**
     * Get the value of fechaAsistencia
     */
    public function getFechaAsistencia(): DateTime
    {
        return $this->fechaAsistencia;
    }

    /**
     * Set the value of fechaAsistencia
     */
    public function setFechaAsistencia(DateTime $fechaAsistencia): self
    {
        $this->fechaAsistencia = $fechaAsistencia;

        return $this;
    }

    /**
     * Get the value of horaAsistencia
     */
    public function getHoraAsistencia(): DateTime
    {
        return $this->horaAsistencia;
    }

    /**
     * Set the value of horaAsistencia
     */
    public function setHoraAsistencia(DateTime $horaAsistencia): self
    {
        $this->horaAsistencia = $horaAsistencia;

        return $this;
    }
}
