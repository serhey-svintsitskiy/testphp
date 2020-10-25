<?php

use TypeChecker\TypeChecker;

require_once __DIR__ . "/../vendor/autoload.php";

$s = '1.2dfsg';
$f = (float)$s;
$i = (int)$s;

echo "{$s} {$f} {$i}\n";

var_dump(is_float((float)ltrim(' 0', '23.5')));

$typeChecker = new TypeChecker();
assert($typeChecker->checkType('1.2dfsg') === TypeChecker::TYPE_STRING);