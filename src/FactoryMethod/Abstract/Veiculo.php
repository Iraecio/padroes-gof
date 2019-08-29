<?php

namespace iraecio\FactoryMethod;

abstract class Veiculo
{
    private $modelo;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo)
    {
        $this->modelo = $modelo;
    }

}