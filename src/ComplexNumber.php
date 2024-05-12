<?php

/*
 * Класс объект-значение комплексного числа.
 *
 * (c) Gladkikh Maksim <max.gdkh@gmail.com>
 * 
 */

namespace ComplexMath;

class ComplexNumber
{
    private $real;
    private $imaginary;
    
    /**
     * Создаём комплексное число
     * 
     * @param string $real      - вещественная часть числа
     * @param string $imaginary - мнимая часть числа
     */
    public function __construct(string $real, string $imaginary)
    {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }
    
    public function getReal():string
    {
        return $this->real;
    }
    
    public function getImaginary():string
    {
        return $this->imaginary;
    }
}
