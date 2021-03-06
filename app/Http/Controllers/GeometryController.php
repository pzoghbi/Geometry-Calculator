<?php

namespace App\Http\Controllers;

use App\Services\GeometryCalculatorService;
use Illuminate\Http\Request;

class GeometryController extends Controller
{
    public function Triangle(float $a, float $b, float $c){
        $triangle = (new GeometryCalculatorService())->CalculateTriangle($a, $b, $c);
        return json_encode($triangle);
    }

    public function Circle(float $radius){
        $circle = (new GeometryCalculatorService())->CalculateCircle($radius);
        return json_encode($circle);
    }

    public function Combine(string $o1, string $o2){
        $combined = (new GeometryCalculatorService())->CombineObjects($o1, $o2);

        return View('geometry')->with([
            'result' => json_encode($combined, JSON_PRETTY_PRINT),
        ]);
    }

    public function MainScreen() {
        return View('main-screen');
    }

    public function CreateTriangle() {
        return View('triangle.create');
    }

    public function CreateCircle() {
        return View('circle.create');
    }

    public function GetShapes() {
        $list = (new GeometryCalculatorService())->GetList();
        return json_encode($list, JSON_PRETTY_PRINT);
//        return View('combine')->with([
//            'triangles' => $list['triangles'],
//            'circles' => $list['circles']
//        ]);
    }

    public function GetCombine() {
        return View('combine');
    }

    public function Result(string $object){
        $object = json_decode(urldecode($object));

        return View('result')->with([
            'object' => $object,
        ]);
    }
}
