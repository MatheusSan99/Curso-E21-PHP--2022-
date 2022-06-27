<?php
session_start();
require_once 'bancoDeDados.php';
require_once 'form.html';


    if (isset($_POST['enviar'])) {

        
        $loginAcesso = ['login' => $_POST['login'], 'password' => $_POST['password']];

        require_once 'verificacao.php';

    }
    ?>

