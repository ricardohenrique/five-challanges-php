<?php

require_once __DIR__.'/OddNumber.php';

class OddNumberTest extends \PHPUnit\Framework\TestCase
{
    public function testOddNumberCase1()
    {
        $odd = new OddNumber([2, 5, 9, 1, 5, 1, 8, 2, 8]);
        $this->assertThat($odd->find(), $this->equalTo(9));
    }

    public function testOddNumberCase2()
    {
        $odd = new OddNumber([2, 3, 3, 1, 4, 5, 4, 1, 4, 2, 5]);
        $this->assertThat($odd->find(), $this->equalTo(4));
    }

    /**
     * @expectedException \Exception
     */
    public function testNoNumber()
    {
        $odd = new OddNumber([1, 2, 2, 1]);
        $odd->find();
    }
}