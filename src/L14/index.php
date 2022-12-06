<?php

use WFM_OOP\L14\App\{BookProduct, NotebookProduct};
use PHPMailer\PHPMailer\PHPMailer;
use WFM_OOP\L14\Wfm\Interfaces\IGadget;

error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

$book = new BookProduct('Три мушкетера', 120.99, 189);
$notebook = new NotebookProduct('Dell', 1000, 'AMD');

function offerCase(IGadget $product): void
{
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

offerCase($notebook);
var_dump($book, $notebook);
