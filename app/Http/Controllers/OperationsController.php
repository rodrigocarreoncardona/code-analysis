<?php

namespace App\Http\Controllers;

class OperationsController extends Controller
{
    // addition

    // subtraction

    public function multiplication($a, $b): float
    {
        return $a * $b;
    }

    // division

    // square
    public function square($a): float
    {
        return $a ** 2;
    }

    // square root
    public function squareRoot($a): float
    {
        return sqrt($a);
    }

    // factorial
}
