<?php
class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testAddition(): void
    {
        $calculator = new App\Calculator;
        $this->assertEquals(3, $calculator->addTwoNumbers(1,2));
    }
}