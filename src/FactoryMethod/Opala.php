<?php

namespace iraecio\FactoryMethod;

class Opala extends Veiculo 
{
    public function __construct()
    {
        $this->setModelo("Opala");
    }
}