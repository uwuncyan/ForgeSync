<?php
/**
 * Tests for ForgeSync
 */

use PHPUnit\Framework\TestCase;
use Forgesync\Forgesync;

class ForgesyncTest extends TestCase {
    private Forgesync $instance;

    protected function setUp(): void {
        $this->instance = new Forgesync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Forgesync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
