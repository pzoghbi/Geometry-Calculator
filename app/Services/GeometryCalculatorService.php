<?php

namespace App\Services;

use App\Models\Circle;
use App\Models\Triangle;
use stdClass;

class GeometryCalculatorService
{
    public function CalculateTriangle(float $a, float $b, float $c){
        return new Triangle($a, $b, $c);
    }

    public function CalculateCircle(float $radius){
        return new Circle($radius);
    }

    public function CombineObjects(string $a, string $b) {
        // Convert URL to String and then decode JSON
        $a = json_decode(urldecode($a));
        $b = json_decode(urldecode($b));

        // Create a generic object containing 2 dynamic properties
        $combined = new stdClass();
        $combined->surface = $a->surface + $b->surface;
        $combined->circumference = $a->circumference + $b->circumference;
        return $combined;
    }
}
