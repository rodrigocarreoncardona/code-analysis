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

    public function test_addition(): void
    {
        $controller = new OperationsController;
        $result = $controller->addition(5, 3);

        $this->assertIsNumeric($result);
        $this->assertEquals(8, $result);
        $this->assertNotNull($result);
        $this->assertGreaterThan(0, $result);
    }

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
