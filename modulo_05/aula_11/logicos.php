<?php 

$verdadeiro = true;
$falso = false;

if ($verdadeiro) {
    echo 'Verdadeiro' . PHP_EOL;
} else {
    echo 'Falso' . PHP_EOL;
}

if (!$falso) {
    echo 'Verdadeiro' . PHP_EOL;
} else {
    echo 'Falso' . PHP_EOL;
}

if ($verdadeiro || $falso) {
    echo 'Verdadeiro' . PHP_EOL;
} else {
    echo 'Falso' . PHP_EOL;
}

if ($verdadeiro && $falso) {
    echo 'Verdadeiro' . PHP_EOL;
} else {
    echo 'Falso' . PHP_EOL;
}

if ($verdadeiro xor $falso) {
    echo 'Verdadeiro' . PHP_EOL;
} else {
    echo 'Falso' . PHP_EOL;
}
