<?php

declare(strict_types=1);

namespace vendor\gof;

use PHPUnit\Framework\TestCase;

class gofTest extends TestCase
{
    /**
     * @var gof
     */
    protected $gof;

    protected function setUp() : void
    {
        $this->gof = new gof;
    }

    public function testIsInstanceOfgof() : void
    {
        $actual = $this->gof;
        $this->assertInstanceOf(gof::class, $actual);
    }
}
