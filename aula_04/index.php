<?php 

$nome = 'Gustavo';
$altura = 1.72;
$idade = 30;
$casado = false;
$frutas = ['Maçã', 'Banana', 'Limão'];
$objeto = new stdClass();

$objeto->nomeCompleto = 'Gustavo Alves da Silva';

echo '<p>';

echo 'Nome: ' . $nome . '<br>';
echo 'Idade: ' . $idade . '<br>';
echo ($casado) ? 'Casado: Sim<br>' : 'Casado: Não<br>';


echo '</p>';

echo 'Frutas: <br>';
echo $frutas[0] . '<br>';
echo $frutas[1] . '<br>';
echo $frutas[2] . '<br>';

echo 'Nome Completo: ' . $objeto->nomeCompleto . '<br>';

echo '<p>Nome Tipo: ' . gettype($nome) . '</p>';
echo '<p>Idade Tipo: ' . gettype($idade) . '</p>';
echo '<p>Altura Tipo: ' . gettype($altura) . '</p>';
echo '<p>Casado Tipo: ' . gettype($casado) . '</p>';
echo '<p>Frutas Tipo: ' . gettype($frutas) . '</p>';
echo '<p>Objeto Tipo: ' . gettype($objeto) . '</p>';
