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
    public function factorial(int $n): int
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('Factorial is not defined for negative numbers.');
        }

        if ($n === 0 || $n === 1) {
            return 1;
        }

        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }

        return $result;
    }
}
