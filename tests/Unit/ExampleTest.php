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
    public function test_subtraction(): void
    {
        $controller = new OperationsController;
        $result = $controller->subtraction(10, 4);

        $this->assertIsFloat($result);
        $this->assertEquals(6, $result);
        $this->assertNotNull($result);
    }
     // multiplication

    public function test_multiplication(): void
    {
        $controller = new OperationsController;
        $result = $controller->multiplication(3, 4);

        $this->assertIsFloat($result);
        $this->assertEquals(12, $result);
        $this->assertNotNull($result);
        $this->assertGreaterThan(0, $result);
    }

    // percentage
    public function test_percentage(): void
    {
        $controller = new OperationsController;
        $result = $controller->percentage(200, 15);

        $this->assertIsFloat($result);
        $this->assertEquals(30, $result);
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
