<?php

use WFM_OOP\L12\Classes\BookProduct;
use WFM_OOP\L12\Classes\NotebookProduct;
use WFM_OOP\L12\Interfaces\IGadget;

error_reporting(E_ALL);

function loader($class): void
{
    $file = __DIR__ . str_replace("WFM_OOP\\L12\\", "\\", $class) . '.php';
    $file = str_replace("\\", "/", $file);
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('loader');

$book = new BookProduct('Три мушкетера', 120.99, 189);
$notebook = new NotebookProduct('Dell', 1000, 'AMD');

function offerCase(IGadget $product)
{
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

var_dump($book);
echo $book->getProduct();
offerCase($notebook);
