<?php

class BookProduct extends Product
{
    public int $numPages;

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
}
