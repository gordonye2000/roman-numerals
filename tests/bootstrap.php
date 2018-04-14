<?php
/**
 * @file
 * Boostrap for PHPUnit.
 */

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4('Larowlan\\RomanNumeral\\Tests\\', __DIR__);
