<?php

namespace App\Services;

use App\Models\Circle;
use App\Models\Triangle;

class GeometryCalculatorService
{
    public function CalculateTriangle(float $a, float $b, float $c){
        return new Triangle($a, $b, $c);
    }

    public function CalculateCircle(float $radius){
        return new Circle($radius);
    }
}
