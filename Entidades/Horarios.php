<?php

class Horario
{
    private int $id;
    private DateTime $horarioInicio;
    private DateTime $horarioSalida;


    public function __construct(int $id, DateTime $horarioInicio, DateTime $horarioSalida)
    {
        $this->id = $id;
        $this->horarioInicio = $horarioInicio;
        $this->horarioSalida = $horarioSalida;
    }



    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of horarioInicio
     */
    public function getHorarioInicio(): DateTime
    {
        return $this->horarioInicio;
    }

    /**
     * Set the value of horarioInicio
     */
    public function setHorarioInicio(DateTime $horarioInicio): self
    {
        $this->horarioInicio = $horarioInicio;

        return $this;
    }

    /**
     * Get the value of horarioSalida
     */
    public function getHorarioSalida(): DateTime
    {
        return $this->horarioSalida;
    }

    /**
     * Set the value of horarioSalida
     */
    public function setHorarioSalida(DateTime $horarioSalida): self
    {
        $this->horarioSalida = $horarioSalida;

        return $this;
    }


    public function __toString()
    {
        return "ID: " . $this->id ;
    }
}
