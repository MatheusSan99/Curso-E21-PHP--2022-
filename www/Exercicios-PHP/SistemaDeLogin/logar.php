<?php
session_start();

require_once 'html/form.html';
require_once 'bancoDeDados.php';
require_once 'adicionarUsuario.php';
require_once 'verificacao.php';

print_r($_SESSION['cadastros']);
if (isset($_POST['enviar'])) {

    $loginUser = ['login' => $_POST['login'], 'password' => $_POST['password']];

    verificaDados($loginUser, $_SESSION['cadastros']);
}

