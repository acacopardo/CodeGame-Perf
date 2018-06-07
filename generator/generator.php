<?php

use Generator\BubbleSorting;
use Generator\FileManager;

include_once __DIR__ . '/../vendor/autoload.php';

$inputsPath = __DIR__ . '/../inputs/';
$outputsPath = __DIR__ . '/../outputs/';

$fileManager = new FileManager();

$fileToGenerate = 20;
$iterator = 0;

while ($fileToGenerate > $iterator) {
    $iterator++;
    $tabtosort = new BubbleSorting();

    $tabtosort->setSize(random_int(100, 10000));

    $inputs = $tabtosort->generate();
    $fileManager->save($inputsPath . 'input' . $iterator . '.php', $inputs);

    $outputs = $tabtosort->solve($inputs);
    $fileManager->save($outputsPath . 'output' . $iterator . '.php', $outputs);
}
