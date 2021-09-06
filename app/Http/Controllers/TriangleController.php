<?php

namespace App\Http\Controllers;

use App\Models\Triangle;
use App\Services\GeometryCalculatorService;
use Illuminate\Http\Request;

class TriangleController extends Controller
{
    public function index($a, $b, $c){
        $triangle = (new GeometryCalculatorService())->CalculateTriangle($a, $b, $c);

        if ($triangle->invalid) {

        }

        return View('geometry')->with([
            'result' => json_encode($triangle, JSON_PRETTY_PRINT),
        ]);
    }
}
