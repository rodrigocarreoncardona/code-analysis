<?php

namespace App\Http\Controllers;

class OperationsController extends Controller
{
    // addition

    public function addition($a, $b): int|float
    {
        return $a + $b;
    }

    // subtraction

    public function multiplication($a, $b): float
    {
        return $a * $b;
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
