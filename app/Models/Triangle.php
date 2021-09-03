<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Triangle extends Model
{
    protected $fillable = [
        'type',
        'a',
        'b',
        'c',
        'surface',
        'circumference'
    ];

    public $timestamps = false;

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
