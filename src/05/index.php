<?php

require_once 'classes/FileWrite.php';

$var1 = new FileWrite(__DIR__ . '/test.txt');
$var1->write('hello');
$var1->write('me a little stupid');
$var1->write('I am a japanese cat ^_^');
$var1->write('And you?');
