<?php

require_once __DIR__ . "/../vendor/autoload.php";

$test = new \Filesystem\LocalFilesystem(__DIR__);
$test->test(); 