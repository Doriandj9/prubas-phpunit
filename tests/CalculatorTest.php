<?php declare(strict_types=1);

namespace Calculator\Init\Test;

use Calculator\Init\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    protected $calculetor;

    /**
     * @covers Calculator\Init\Calculator
     */
    public function testIsSum(): void
    {
        $this->calculetor = new Calculator(5, 5);

        $this->assertSame(10, $this->calculetor->suma());
    }
}
