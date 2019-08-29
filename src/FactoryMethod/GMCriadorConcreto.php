<?php

namespace iraecio\FactoryMethod;

class GMCriadorConcreto extends GMCriador
{
    public function factoryOpala(): Opala
    {
        return new Opala();
    }

    public function factoryVectra(): Vectra
    {
        return new Vectra();
    }
}
