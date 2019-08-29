<?php

declare(strict_types=1);

namespace iraecio\AbstractFactory;

class FabricaGuarda implements Modelo
{
    public function getCachorro()
    {
        return new Pastor();
    }

    public function getGato()
    {
        return new RagDoll();
    }
}
