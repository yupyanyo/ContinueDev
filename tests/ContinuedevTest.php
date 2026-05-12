<?php
/**
 * Tests for ContinueDev
 */

use PHPUnit\Framework\TestCase;
use Continuedev\Continuedev;

class ContinuedevTest extends TestCase {
    private Continuedev $instance;

    protected function setUp(): void {
        $this->instance = new Continuedev(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Continuedev::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
