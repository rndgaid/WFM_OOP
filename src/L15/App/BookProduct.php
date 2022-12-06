<?php

namespace WFM_OOP\L15\App;

use WFM_OOP\L15\Wfm\Interfaces\I3D;
use WFM_OOP\L15\Wfm\Product;

class BookProduct extends Product implements I3D
{
    public int $numPages;
    public string $action1;
    public string $action2;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(10);
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
    public function doAction1(): BookProduct
    {
        echo $this->action1 = "<p>Выполнили действие один</p>";
        return $this;
    }
    public function doAction2(): BookProduct
    {
        echo $this->action2 = "<p>Выполнили действие два</p>";
        return $this;
    }
}
