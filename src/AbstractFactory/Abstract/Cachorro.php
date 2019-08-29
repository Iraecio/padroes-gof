<?php

declare(strict_types=1);

namespace iraecio\AbstractFactory;

abstract class Cachorro extends Pet
{
    public function __construct(string $nome)
    {
        parent::__construct($nome);
    }
}
