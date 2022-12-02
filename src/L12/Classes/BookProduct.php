<?php

namespace WFM_OOP\L12\Classes;

use WFM_OOP\L12\Interfaces\I3D;

class BookProduct extends Product implements I3D
{
    public int $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(10);
        var_dump(self::class);
    }

    public function getProduct(): string
    {
        $out = parent::getProduct();
        $out .= "Цена без скидки - $this->price<br>";
        $out .= "Количество страниц - $this->numPages<br>";
        $out .= "Скидка - {$this->getDiscount()}%<br>";
        return $out;
    }

    public function getNumPages(): int
    {
        return $this->numPages;
    }

    public function addProduct($name, $price)
    {
        // TODO: Implement addProduct() method.
    }
    public function test()
    {
        var_dump(self::TEST2);
    }
}
