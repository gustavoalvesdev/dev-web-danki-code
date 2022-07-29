<?php

if (isset($_GET['acao'])) {

    if (isset($_GET['nome']) && !empty($_GET['nome']) && isset($_GET['idade']) && !empty($_GET['idade']) && isset($_GET['cidade']) && !empty($_GET['cidade'])) {

        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $cidade = $_GET['cidade'];

        echo "Meu nome é $nome, eu moro em $cidade e tenho $idade anos";

    } else {
        header('Location: ./form.php');
    }

} else {
    header('Location: ./form.php');
}
