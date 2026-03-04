<?php
/**
 * Tests for SmartFusion
 */

use PHPUnit\Framework\TestCase;
use Smartfusion\Smartfusion;

class SmartfusionTest extends TestCase {
    private Smartfusion $instance;

    protected function setUp(): void {
        $this->instance = new Smartfusion(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartfusion::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
