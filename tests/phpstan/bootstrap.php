<?php
$root =  dirname(dirname(dirname(__FILE__)));
chdir($root);

$loader = require $root . '/vendor/autoload.php';
$loader->add('App\\', './src/App');