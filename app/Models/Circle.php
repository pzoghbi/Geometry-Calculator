<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    protected $fillable = [
        'type',
        'radius',
        'surface',
        'circumference'
    ];

    public $timestamps = false;

    public string $type = "circle";
    public float $radius;
    public float $surface;
    public float $circumference;

    public function __construct($radius) {
        $this->radius = $radius;
        $this->surface = round($this->CalculateSurface(), 2);
        $this->circumference = round($this->CalculateCircumference(), 2);
    }

    public function CalculateSurface(){
        return pow($this->radius, 2) * pi();
    }

    public function CalculateCircumference(){
        return 2.0 * $this->radius * pi();
    }
}
