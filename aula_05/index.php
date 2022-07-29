<?php 

echo "<title>Constantes</title>";

define('NOME', 'Gustavo');
define('IDADE', 30);
define('NOME_DO_CACHORRO', 'Laila');

echo NOME . '<br>' . IDADE . '<br>' . NOME_DO_CACHORRO;

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'database');

echo '<br>';

echo 'mysql:host=' . HOST .';dbname=' . DATABASE . ', ' . USER . ', ' . PASSWORD;
