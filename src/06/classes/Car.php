<?php

class Car
{
    public string $color;
    public int $wheels;
    public int $speed;
    public string $brand;

    public static int $countCar = 0;

    public const TEST_CAR = 'Prototype';
    public const TEST_CAR_SPEED = 300;

    public function __construct($col, $wh, $sp, $br)
    {
        $this->color = $col;
        $this->wheels = $wh;
        $this->speed = $sp;
        $this->brand = $br;
        self::$countCar += 1;
    }

    /**
     * @return int
     */
    public static function getCountCar(): int
    {
        return self::$countCar;
    }

    public function getCarInfo(): string
    {
        return "<h3>О моем авто:</h3>
                Марка - $this->brand<br>
                Цвет - $this->color<br>
                Скорость - $this->speed<br>
                Кол-во колес - $this->wheels<br>";
    }

    public function getPrototypeInfo(): string
    {
        return "<h3>Данные тестового авто:</h3>
                Наименование - " . self::TEST_CAR . "<br>
                Скорость - " . self::TEST_CAR_SPEED . "<br>";
    }
}
