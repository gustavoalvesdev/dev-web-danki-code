<?php 

$numeros = array(0 => [1, 2, 3], 1 => [4, 5, 6], 3 => [7, 8, 9]);

foreach($numeros as $linha) {
    for ($i = 0; $i < count($linha); $i++) {
        print $linha[$i] . ' ';
    }
    print PHP_EOL;
}
