<?php

use WFM_OOP\src\_12\classes\Product;
use WFM_OOP\src\_12\classes\BookProduct;
use WFM_OOP\src\_12\classes\NotebookProduct;
use WFM_OOP\src\_12\interfaces\I3D;
use WFM_OOP\src\_12\interfaces\IGadget;

error_reporting(E_ALL);


function loader1($class): void
{
    $file = "$class.php";
    if (file_exists($file)) {
        require_once $file;
    }
}

function loader2($class): void
{
    $file = __DIR__ . "/interfaces/$class.php";
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('loader1');
spl_autoload_register('loader2');

$book = new BookProduct('Три мушкетера', 120.99, 189);
$notebook = new NotebookProduct('Dell', 1000, 'AMD');


function offerCase(IGadget $product)
{
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

var_dump($book);
echo $book->getProduct();
offerCase($notebook);
