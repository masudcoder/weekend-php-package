<?php

namespace Masud\WeekendPackage;



//use Masud\WeekendPackage\Weekend;
// as srcCode/Weekend class and WeekendTest2 has same namespace so no need to include it.

use PHPUnit\Framework\TestCase;

class WeekendTest2 extends TestCase
{

    public function testValue(): void
    {
        $ob = new Weekend();
        $this->assertEquals(true, $ob->isWeekend('2021-06-19')); //sat
        $this->assertNotEquals(true, $ob->isWeekend('2021-06-18')); //fri
        $this->assertEquals(true, $ob->isWeekend('2021-06-20')); //sun
    }

}