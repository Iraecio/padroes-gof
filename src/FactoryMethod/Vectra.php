<?php

namespace iraecio\FactoryMethod;

class Vectra extends Veiculo 
{
    public function __construct()
    {
        $this->setModelo("Vectra");
    }
}