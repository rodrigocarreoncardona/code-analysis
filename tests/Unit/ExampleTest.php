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
    public function test_factorial(): void
    {
        $controller = new OperationsController;
        $result = $controller->factorial(5);

        $this->assertIsInt($result);
        $this->assertEquals(120, $result);
        $this->assertNotNull($result);
        $this->assertGreaterThan(0, $result);
    }

    public function test_factorial_zero(): void
    {
        $controller = new OperationsController;
        $result = $controller->factorial(0);

        $this->assertIsInt($result);
        $this->assertEquals(1, $result);
    }

    public function test_factorial_negative_throws_exception(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $controller = new OperationsController;
        $controller->factorial(-1);
    }
}
