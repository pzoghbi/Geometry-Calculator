<?php

namespace App\Http\Controllers;

use App\Models\Circle;
use App\Services\GeometryCalculatorService;
use Illuminate\Http\Request;

class CircleController extends Controller
{
    public function index ($radius) {
        $circle = (new GeometryCalculatorService())->CalculateCircle($radius);

        return View('geometry')->with([
            'result' => json_encode($circle, JSON_PRETTY_PRINT),
        ]);
    }
}
