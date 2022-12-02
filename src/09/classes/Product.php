<?php

class Product
{
    private string $name;
    protected float $price;

    private float $discount = 0;

//    public string $public = 'PUBLIC';
//    protected string $protected = 'PROTECTED';
//    private string $private = 'PRIVATE';

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        //var_dump($this->public, $this->protected, $this->private);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }

    public function getProduct(): string
    {
        return "<hr><b>О товаре:</b><br>
               Наименование - $this->name<br>
               Цена со скидкой - " . round($this->getPrice(), 2) . "<br>";
    }

    public function getDiscount(): float
    {
        return $this->discount;
    }

    public function setDiscount(float $discount): void
    {
        $this->discount = $discount;
    }
}
