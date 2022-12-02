<?php

error_reporting(E_ALL);

require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/I3D.php';
require_once 'classes/BookProduct.php';

$book = new BookProduct('Три мушкетера', 120.99, 189);

var_dump($book);

echo $book->getProduct();
$book->test();