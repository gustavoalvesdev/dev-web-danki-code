<?php 

$num1 = 12;
$num2 = 20;

$operacao = '+';

if ($operacao == '+') {
    echo 'Resultado: ' . ($num1 + $num2);
} else if ($operacao == '-') {
    echo 'Resultado: ' . ($num1 - $num2);
} else if ($operacao == '*') {
    echo 'Resultado: ' . ($num1 * $num2);
} else if ($operacao == '/') {
    echo 'Resultado: ' . ($num1 / $num2);
} else if ($operacao == '%') {
    echo 'Resultado: ' . ($num1 % $num2); 
}

$idade = 15;

echo '<br>Idade do Usuário: ' . $idade . '<br>';

if ($idade >= 18) {
    echo 'Usuário maior de idade';
} else {
    echo 'Usuário menor de idade';
}
