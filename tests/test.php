<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExemploCiTest extends TestCase
{
    public function testSoma(): void
    {
        require_once('exemplo-ci.php');
        $this->assertEquals(4, somar(2, 2));
    }

    public function testMultiplicacao(): void
    {
        require_once('exemplo-ci.php');
        $this->assertEquals(6, multiplicar(2, 3));
    }
}
