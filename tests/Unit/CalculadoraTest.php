<?php

namespace Tests\Unit;

use App\Libraries\Calculadora;

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function test_somar_dois_numeros()
    {
        $calc = new Calculadora();
        $this->assertEquals(7, $calc->somar(2, 5));
        $this->assertEquals(8.5, $calc->somar(2.5, 6));
        $this->assertEquals(0, $calc->somar(0, 0));
        $this->assertEquals(0.001, $calc->somar(0.0005, 0.0005));
    }

}
