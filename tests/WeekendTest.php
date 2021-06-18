<?php

namespace Masud\WeekendPackageAnyName\Tests;
//WeekendPackageAnyName  usually this type of name is not used, as this class is
//not included in other class so you can give anything in namcespace. but standard is
//providing what has in composer.json like "Masud\\WeekendPackage"

use Masud\WeekendPackage\Weekend;
//Masud\WeekendPackage is mapped to srcCode, so it includes from there.
/*if you declare namespace namespace Masud\WeekendPackage then you did not need to write this use code.
you could directly create object of Weekend class.*/

use PHPUnit\Framework\TestCase;

class WeekendTest extends TestCase
{

    public function testValue(): void
    {
        $ob = new Weekend();

        $this->assertEquals(true, $ob->isWeekend('2021-06-19'));
        $this->assertNotEquals(true, $ob->isWeekend('2021-06-18'));
        $this->assertEquals(false, $ob->isWeekend('2021-06-17'));
    }

}