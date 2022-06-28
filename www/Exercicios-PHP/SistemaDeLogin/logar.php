<?php
session_start();


require_once 'html/form.html';
require_once 'bancoDeDados.php';
require_once 'verificacao.php';
// require_once 'adicionarUsuario.php';

    if (isset($_POST['enviar'])) {

        $loginAcesso = ['login' => $_POST['login'], 'password' => $_POST['password']];

        verificaDados($loginAcesso, $_SESSION['salvaLogin']);

    }
print_r($_SESSION['salvaLogin']);
 