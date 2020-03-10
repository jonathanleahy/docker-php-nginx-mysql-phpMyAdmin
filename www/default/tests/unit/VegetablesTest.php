<?php

use PHPUnit\Framework\TestCase;

class VegetablesTest extends TestCase
{
    public function testVegetablesIsEmpty()
    {
        $vegetables = new Vegetables();
        $this->assertEquals(0, $vegetables->getCount());
    }

    public function testVegetablesNotEmpty()
    {
        $vegetables = new Vegetables();
        $results = $vegetables->populate();
        $this->assertEquals(0, $results->getCount());
    }

}
