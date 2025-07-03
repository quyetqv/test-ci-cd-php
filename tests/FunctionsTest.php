<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../functions.php';

class FunctionsTest extends TestCase {
    public function testTestFunction() {
        $this->assertEquals('This is a test function.', test());
    }
}
