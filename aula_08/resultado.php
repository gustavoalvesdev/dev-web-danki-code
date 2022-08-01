<?php 

require 'operacoes.php';

if (isset($_GET['acao'])) {

    if (isset($_GET['num1']) && !empty($_GET['num1']) && isset($_GET['num2']) && !empty($_GET['num2']) && isset($_GET['operacao']) && !empty($_GET['operacao'])) {


        $num1 = intval($_GET['num1']);
        $num2 = intval($_GET['num2']);
        $operacao = $_GET['operacao'];

        switch($operacao) {

            case '1':
                echo soma($num1, $num2);
            break;

            case '2':
                echo subtracao($num1, $num2);
            break;

            case '3':
                echo multiplicacao($num1, $num2);
            break;

            case '4':
                echo divisao($num1, $num2);
            break;

            case '5':
                echo restoDivisao($num1, $num2);
            break;

        }

    }

} else {
    header('Location: ./form.php');
}

