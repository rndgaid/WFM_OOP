<?php

class Car
{
    public string $color = 'white';
    public int $wheels = 4;
    public int $speed = 180;
    public string $brand = 'volvo';

    public function __construct($col, $wh, $sp, $br)
    {
        $this->color = $col;
        $this->wheels = $wh;
        $this->speed = $sp;
        $this->brand = $br;
    }

    public function getCarInfo(): string
    {
        return "<h3>О моем авто:</h3>
                Марка - $this->brand<br>
                Цвет - $this->color<br>
                Скорость - $this->speed<br>
                Кол-во колес - $this->wheels<br>";
    }

    public function __destruct()
    {
        var_dump($this);
    }
}
