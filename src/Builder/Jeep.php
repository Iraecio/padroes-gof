<?php

namespace iraecio\Builder;

class Jeep extends Veiculo
{
    private $nome;

    public function __construct(string $modelo)
    {
        parent::__construct($modelo, 'Utilitario');
        $this->nome = "Jeep";
    }

    public function __toString()
    {
        return "Carro: ".$this->nome." ". $this->getModelo()." ". $this->getTipo();
    }
}