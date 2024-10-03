<?php

class TiposFaltas
{
    private int $id;
    private string $tipoFalta;

    public function __construct(int $id, string $tipoFalta)
    {
        $this->id = $id;
        $this->tipoFalta = $tipoFalta;
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
