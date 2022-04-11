<?php

namespace Calculator\Init;

class Calculator{
    private $numUno;
    private $numDos;

    public function __construct(int $numUno, int $numDos)
    {
        $this->numUno = $numUno;
        $this->numDos = $numDos;
    }

    public function suma(): int
    {
        return $this->numUno + $this->numDos;
    }
}