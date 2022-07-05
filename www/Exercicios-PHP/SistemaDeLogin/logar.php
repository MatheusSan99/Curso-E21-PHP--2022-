<?php
session_start();
require_once 'html/form.html';
require_once 'bancoDeDados.php';
require_once 'adicionarUsuario.php';
require_once 'verificacao.php';
require_once 'resetar.php';

echo "Logins Cadastrados (para análise do funcionamento) <br><br>";

foreach ($_SESSION['cadastros'] as $indice => $dados) {

    echo "Login: {$dados['login']} | ";
    echo "Senha: {$dados['password']} <br>";
}
if (isset($_POST['enviar'])) {

    $loginUser = ['login' => $_POST['login'], 'password' => $_POST['password']];

    verificaDados($loginUser, $_SESSION['cadastros']);
}



