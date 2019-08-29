<?php

declare(strict_types=1);

namespace iraecio\AbstractFactory;

class FabricaCompanhia implements Modelo
{
    public function getCachorro()
    {
        return new Shitzu();
    }

    public function getGato()
    {
        return new Persa();
    }
}
