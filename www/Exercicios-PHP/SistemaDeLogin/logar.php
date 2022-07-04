<?php
session_start();

require_once 'html/form.html';
require_once 'bancoDeDados.php';
require_once 'adicionarUsuario.php';
require_once 'verificacao.php';

echo "Logins Cadastrados (para análise do funcionamento) <br><br>";

foreach ($_SESSION['cadastros'] as $indice) {
    echo "Login {$indice['login']} | ";
    echo "Senha {$indice['password']} <br>";
}
if (isset($_POST['enviar'])) {

    $loginUser = ['login' => $_POST['login'], 'password' => $_POST['password']];

    verificaDados($loginUser, $_SESSION['cadastros']);
}
if (isset($_POST['resetar'])) {
    require_once 'resetar.php';
}

