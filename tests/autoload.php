<?php

include_once __DIR__. '/../../../../vendor/autoload.php';

$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr4("Klsheng\\Myinvois\\", __DIR__, true);
$classLoader->register();