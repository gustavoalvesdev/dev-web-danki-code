<?php 

echo date('d/m/Y', strtotime('now'));

function mostrarNome($nome = 'Gustavo') {
    echo '<br>Nome: ' . $nome;
}

function soma($n1, $n2) {
    return $n1 + $n2;
}

mostrarNome('Maria');
mostrarNome();

$oi = function() {
    return 'Oi';
};  

echo '<br>Soma: ' . soma(22, 23);

echo '<br>' . $oi();
