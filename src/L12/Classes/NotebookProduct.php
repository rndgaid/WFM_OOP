<?php

namespace WFM_OOP\L12\Classes;

use WFM_OOP\L12\Interfaces\IGadget;

class NotebookProduct extends Product implements IGadget
{
    public string $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getCpu(): string
    {
        return $this->cpu;
    }

    public function getProduct(): string
    {
        $out = parent::getProduct();
        $out .= "Процессор - $this->cpu<br>";
        return $out;
    }

    public function addProduct($name, $price)
    {
        // TODO: Implement addProduct() method.
    }

    public function getCase()
    {
        // TODO: Implement getCase() method.
    }
}
