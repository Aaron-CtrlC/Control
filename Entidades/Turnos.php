<?php

class Turnos
{
    private int $id;
    private string $tipoTurno;


    public function __construct(int $id, string $tipoTurno)
    {
        $this->id = $id;
        $this->tipoTurno = $tipoTurno;
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
     * Get the value of tipoTurno
     */
    public function getTipoTurno(): string
    {
        return $this->tipoTurno;
    }

    /**
     * Set the value of tipoTurno
     */
    public function setTipoTurno(string $tipoTurno): self
    {
        $this->tipoTurno = $tipoTurno;

        return $this;
    }
}
