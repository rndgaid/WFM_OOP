<?php

error_reporting(-1);
require_once 'classes/Product.php';

$book = new Product('Три мушкетера', 120.4, null, 230);
$notebook = new Product('Dell', 1000, 'AMD');

var_dump($book, $notebook);

echo $book->getProduct('book');
echo $notebook->getProduct('notebook');
