<?php

namespace iraecio\Builder;


class Ferrari extends Veiculo
{
    private $nome;

    public function __construct(string $modelo)
    {
        parent::__construct($modelo, 'Esportivo');
        $this->nome = "Ferrari";
    }

    public function __toString()
    {
        return "Carro: " . $this->nome . " ". $this->getModelo()." ". $this->getTipo();
    }
}