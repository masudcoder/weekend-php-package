<?php

namespace Masud\WeekendPackage;

class Weekend
{

    public function isWeekend($date) {
        return (date('N', strtotime($date)) >= 6);
    }

}