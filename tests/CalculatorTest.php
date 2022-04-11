<?php

namespace Calculator\Init\Test;

use Calculator\Init\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * @covers Calculator
 */

class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function isSum()
    {
        $calculetor = new Calculator(5, 5);

        $this->assertSame(10, $calculetor->suma());
    }
}
