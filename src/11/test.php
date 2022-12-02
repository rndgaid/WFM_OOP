<?php

class AA {};
class BB extends AA{};
class CC {};

$aa = new AA();
$bb = new BB();
$cc = new CC();

var_dump($bb instanceof AA);
