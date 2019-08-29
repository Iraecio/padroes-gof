<?php

declare(strict_types=1);

namespace iraecio\AbstractFactory;

class Pastor extends Cachorro
{
    public function __construct()
    {
        parent::__construct('Pastor');
    }
}
