<?php

use WFM_OOP\L15\App\{BookProduct, NotebookProduct};
use WFM_OOP\L15\Wfm\Interfaces\IGadget;

error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

$book = new BookProduct('Три мушкетера', 120.99, 189);
$notebook = new NotebookProduct('Dell', 1000, 'AMD');

function offerCase(IGadget $product): void
{
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$a = new \WFM_OOP\L15\App\A();
$b = new \WFM_OOP\L15\App\B();

$a->getTest();
$b->getTest();
$b->getTest2();

$book->doAction1()->doAction2();

var_dump($book->doAction1());
