<?php

namespace WFM_OOP\L15\App;

class A
{
    protected const TEST = 'Class A';
    public function getTest(): void
    {
        var_dump(self::TEST);
    }
    public function getTest2(): void
    {
        var_dump(static::TEST);
    }
}
