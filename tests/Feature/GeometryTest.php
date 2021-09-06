<?php

namespace Tests\Feature;

use App\Services\GeometryCalculatorService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GeometryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_impossible_triangle_not_flagged_as_invalid(){
        $triangle = (new GeometryCalculatorService())->CalculateTriangle(30, 40, 900);
        $this->assertEquals(true, $triangle->invalid);
    }
}
