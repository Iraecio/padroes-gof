<?php

namespace iraecio\Builder;

abstract class Veiculo
{
    private $modelo;
    private $tipo;

    public function __construct(string $modelo, string $tipo)
    {
        $this->modelo = $modelo;
        $this->tipo = $tipo;
    }

    protected function getModelo(): string
    {
        return $this->modelo;
    }

    protected function getTipo(): string
    {
        return $this->tipo;
    }

}
