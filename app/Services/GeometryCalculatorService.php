<?php

namespace App\Services;

use App\Models\Circle;
use App\Models\Triangle;
use stdClass;

class GeometryCalculatorService
{
    public function CalculateTriangle(float $a, float $b, float $c){
        $triangle = new Triangle($a, $b, $c);

        // Fill Model Data
        $triangle->fill([
            'type' => $triangle->type,
            'a' => $triangle->a,
            'b' => $triangle->b,
            'c' => $triangle->c,
            'surface' => $triangle->surface,
            'circumference' => $triangle->circumference
        ]);

        // Insert into DB
        $triangle->save();

        // Return json string
        return $triangle;
    }

    public function CalculateCircle(float $radius){
        $circle = new Circle($radius);

        // Fill Model Data
        $circle->fill([
            'type' => $circle->type,
            'radius' => $circle->radius,
            'surface' => $circle->surface,
            'circumference' => $circle->circumference
        ]);

        // Insert Into Database
        $circle->save();

        // Return json as string
        return $circle;
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
