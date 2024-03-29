<?php

$vendorGit = __DIR__ . '/../vendor/autoload.php';
$autoPackagist = __DIR__ . '/../../../autoload.php';

if (file_exists($vendorGit)) {
    require_once($vendorGit);
} else {
    require_once($autoPackagist);
}

use function dartaniian\cold_hot\Controller\key;

if (isset($argv[1])) {
    $key = $argv[1];
    key($key, $argv[2]);
} else {
    $key = "-n";
    key($key, $argv[2]);
}
