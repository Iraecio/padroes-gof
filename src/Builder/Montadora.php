<?php

namespace iraecio\Builder;

class Montadora
{
    private $builder;

    public function __construct()
    {
        $this->builder = new MontadoraVeiculoBuilder();
    }

    public function montar(string $tipo, string $modelo)
    {
        $this->builder->montar($tipo, $modelo);
        return $this->builder->getVeiculo();
    }

}