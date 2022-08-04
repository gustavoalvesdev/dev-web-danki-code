<?php 

$array = ['Maria', 'Pedro', 'Fernando', 'Rodrigo', 'Sandra'];

for ($i = 0; $i < count($array); $i++) {
    print $array[$i] . PHP_EOL;
}

$array2 = ['Chocolate', 'Banana', 'Macarrão', 'Pizza', 'Pastel'];

print PHP_EOL;

foreach($array2 as $item) {
    print $item . PHP_EOL;
}

$array3 = array(['carro' => 'Cobalt'], ['carro' => 'Santana'], ['carro' => 'Fusca'], ['carro' => 'Ferrari']);

print PHP_EOL;

foreach($array3 as $carro) {
    foreach ($carro as $key => $modelo) {
        print '[' . $key . '] ' . $modelo . PHP_EOL;
    }
}
