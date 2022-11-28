<?php

class Car
{
    public string $color = 'white';
    public int $wheels = 4;
    public int $speed = 180;
    public string $brand = 'volvo';

    public function getCarInfo(): string
    {
        return "<h3>О моем авто:</h3>
                Марка - $this->brand<br>
                Цвет - $this->color<br>
                Скорость - $this->speed<br>
                Кол-во колес - $this->wheels<br>";
    }
}
