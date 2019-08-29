<?php

declare(strict_types=1);

namespace iraecio\AbstractFactory;

abstract class Pet
{
    private $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function __toString()
    {
        return $this->nome;
    }
}
