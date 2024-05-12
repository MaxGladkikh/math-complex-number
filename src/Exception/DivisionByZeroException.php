<?php

namespace ComplexMath\Exception;

class DivisionByZeroException extends \Exception
{
    const CODE = ExceptionCodes::DIVISION_BY_ZERO;
    const MESSAGE = 'Division by zero';

    public function __construct()
    {
        parent::__construct(self::MESSAGE, self::CODE);
    }
}
