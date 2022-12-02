<?php

use WFM_OOP\L13\Classes\{BookProduct, NotebookProduct};
use PHPMailer\PHPMailer\PHPMailer;
use WFM_OOP\L13\Interfaces\IGadget;

error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

$book = new BookProduct('Три мушкетера', 120.99, 189);
$notebook = new NotebookProduct('Dell', 1000, 'AMD');

function offerCase(IGadget $product)
{
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

//var_dump($book);
//echo $book->getProduct();
//offerCase($notebook);

$mail = new PHPMailer();
var_dump($mail);
