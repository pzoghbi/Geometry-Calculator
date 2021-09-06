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
        'circumference',
        'invalid',
    ];

    protected $casts = [
        'invalid' => 'boolean',
    ];

    public $timestamps = false;

    public string $type = "triangle";
    public float $a;
    public float $b;
    public float $c;
    public float $surface;
    public float $circumference;
    public bool $invalid = false;

    public function Construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

        // Check if the triangle is possible or not
        if (!(($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a))) {
            $this->invalid = (!(($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)));
            return $this;
        }

        $this->surface = $this->CalculateSurface();
        $this->circumference = $this->CalculateCircumference();
        return $this;
    }

    public function CalculateSurface(){
        return $this->a * $this->b / 2.0;
    }

    public function CalculateCircumference(){
        return $this->a + $this->b + $this->c;
    }
}
