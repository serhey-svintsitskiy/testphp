<?php

use TypeChecker\TypeChecker;

require_once __DIR__ . "/../vendor/autoload.php";

$s = '1.2dfsg';
$f = (float)$s;
$i = (int)$s;

echo "{$s} {$f} {$i}\n";

$typeChecker = new TypeChecker();
assert($typeChecker->checkType('1.2dfsg') === TypeChecker::TYPE_STRING);