<?php

use PHPUnit\Framework\TestCase;

class VegetablesTest extends TestCase
{
    public function testVegetablesIsEmpty()
    {
        $vegetables = new Vegetables();
        $this->assertEquals(0, $vegetables->getCount());
    }

}
