<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExemploCiTest extends TestCase
{
    public function testSoma(): void
    {
        require_once('funcoes.php');
        $this->assertEquals(4, getSoma(2, 2));
    }

    public function testMultiplicacao(): void
    {
        require_once('funcoes.php');
        $this->assertEquals(6, getMultiplicacao(2, 3));
    }
}
