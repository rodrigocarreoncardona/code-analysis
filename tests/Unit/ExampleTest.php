<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationsController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    // addition

    // subtraction

    public function test_multiplication(): void
    {
        $controller = new OperationsController;
        $result = $controller->multiplication(3, 4);

        $this->assertIsFloat($result);
        $this->assertEquals(12, $result);
        $this->assertNotNull($result);
        $this->assertGreaterThan(0, $result);
    }

    // division

    // square
    // square
    public function test_square(): void
    {
        $controller = new OperationsController;

        // 1. Caso normal (Mayor a cero)
        $result1 = $controller->square(5);

        $this->assertIsFloat($result1);
        $this->assertEquals(25, $result1);
        $this->assertNotNull($result1);
        $this->assertGreaterThan(0, $result1);

        // 2. Decimal encogido
        $result2 = $controller->square(0.5);

        $this->assertIsFloat($result2);
        $this->assertEquals(0.25, $result2);
        $this->assertNotNull($result2);
        $this->assertLessThan(0.5, $result2);

        // 3. Texto numérico
        $result3 = $controller->square('6');

        $this->assertIsFloat($result3);
        $this->assertEquals(36, $result3);
        $this->assertNotNull($result3);
        $this->assertGreaterThan(0, $result3);

        // 4. Prueba inversa
        $cuadrado = $controller->square(4);
        $result4 = $controller->squareRoot($cuadrado);

        $this->assertIsFloat($result4);
        $this->assertEquals(4, $result4);
        $this->assertNotNull($result4);
        $this->assertGreaterThan(0, $result4);
    }

    // square root
    public function test_root_square(): void
    {
        $controller = new OperationsController;
        $result = $controller->squareRoot(16);

        $this->assertIsFloat($result);
        $this->assertEquals(4, $result);
        $this->assertNotNull($result);
        $this->assertGreaterThan(0, $result);
    }

    // factorial
}
