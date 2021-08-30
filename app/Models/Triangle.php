<?php


namespace App\Models;


class Triangle
{
    public string $type = "triangle";
    public float $a;
    public float $b;
    public float $c;
    public float $surface;
    public float $circumference;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->surface = $this->CalculateSurface();
        $this->circumference = $this->CalculateCircumference();
    }

    public function CalculateSurface(){
        return $this->a * $this->b / 2.0;
    }

    public function CalculateCircumference(){
        return $this->a + $this->b + $this->c;
    }
}
