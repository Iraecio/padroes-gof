<?php

namespace iraecio\FactoryMethod;

use iraecio\FactoryMethod\Opala;
use iraecio\FactoryMethod\Vectra;

abstract class GMCriador
{
    abstract public function factoryOpala(): Opala;
    abstract public function factoryVectra(): Vectra;
}
