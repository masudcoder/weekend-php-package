<?php

namespace Any\Name\You\Want;


use Masud\WeekendPackage\Weekend;
//Masud\WeekendPackage is mapped to srcCode, so it includes from there.

use PHPUnit\Framework\TestCase;

class AnyClass extends TestCase
{

    public function testValue(): void
    {
        $ob = new Weekend();

        $this->assertEquals(true, $ob->isWeekend('2021-06-19'));//sat
        $this->assertNotEquals(true, $ob->isWeekend('2021-06-18'));//fri
        $this->assertEquals(true, $ob->isWeekend('2021-06-23'));//sun
    }

}