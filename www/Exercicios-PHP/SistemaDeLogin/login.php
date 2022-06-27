<?php
session_start();
require_once 'bancoDeDados.php';
require_once 'form.html';
$logado = FALSE;

    if (isset($_POST['enviar'])) {
        $loginAcesso = ['login' => $_POST['login'], 'password' => $_POST['password']];

                if ($loginAcesso == $permissao) {

                    $logado = TRUE;

                    header("refresh: 1; redirecionamento.php");

                }
                    else{
                        echo 'Login ou senha incorretos!';

                    }
    }
    ?>

