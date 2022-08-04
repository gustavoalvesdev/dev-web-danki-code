<?php 

for ($i = 0; $i < 10; $i++) {

    print $i . ' ';

}

print PHP_EOL;

$x = 3;

while ($x < 15) {
    print $x . ' ';
    $x += 1;
}

print PHP_EOL;

$y = 5;

do {
    echo $y . PHP_EOL;
} while ($y < 5);

do {
    echo $y . PHP_EOL;
    $y++;
} while ($y < 10);
