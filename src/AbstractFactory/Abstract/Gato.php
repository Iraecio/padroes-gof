<?php

declare(strict_types=1);

namespace iraecio\AbstractFactory;

abstract class Gato extends Pet
{
    public function __construct(string $nome)
    {
        parent::__construct($nome);
    }
}
