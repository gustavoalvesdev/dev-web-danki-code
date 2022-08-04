<?php 

echo '<title>Arrays</title>';

$frutas = ['Morango', 'Maçã', 'Banana', 'Limão'];

echo '<pre>';
print_r($frutas);
echo '</pre>';

$nomes = array('Pedro', 'Maria', 'Antônia', 'João');

echo '<pre>';
print_r($nomes);
echo '</pre>';

$carros = array(
    'carro1' => 'Tempra',
    'carro2' => 'Ferrari',
    'carro3' => 'Fusca',
    'carro4' => 'Porsche'
);

echo $carros['carro3'];

echo '<br>';

echo '<pre>';

print_r($carros);

echo '</pre>';

$carros[5] = 'Palio';

echo $carros[5];

$cidades = ['cidade1' => 'Florianópolis', 'cidade2' => 'Brasília', 'cidade3' => 'São Paulo'];

echo '<br>';

echo '<pre>';
print_r($cidades);
echo '</pre>';

$pessoas = [
    [
        'nome' => 'Maria',
        'idade' => 25,
        'fumante' => 'Não'
    ],
    [
        'nome' => 'José',
        'idade' => 32,
        'fumante' => 'Sim'
    ],
    [
        'nome' => 'Ricardo',
        'idade' => 42,
        'fumante' => 'Sim'
    ],
    [
        'nome' => 'Gustavo',
        'idade' => 30,
        'fumante' => 'Não'
    ],
];

echo '<br>';

foreach($pessoas as $pessoa) {

    echo '=========================<br>';

    echo 'Nome: ' . $pessoa['nome'] . '<br>';
    echo 'Idade: ' . $pessoa['idade'] . '<br>';
    echo 'Fumante: ' . $pessoa['fumante'] . '<br>';
    echo '=========================<br><br>';

}
