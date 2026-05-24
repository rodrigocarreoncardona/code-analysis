<?php

namespace App\Http\Controllers;

class OperationsController extends Controller
{
    // addition

    public function subtraction($a, $b): float
    {
        return (float) ($a - $b);
    }

    public function multiplication($a, $b): float
    {
        return $a * $b;
    }

    // percentage
    public function percentage(float $total, float $percent): float
    {
        return ($total * $percent) / 100;
    }
    // division

    // square

    // square root
    public function squareRoot($a): float
    {
        return sqrt($a);
    }

    // factorial
}
