<?php
session_start();
require_once 'logout.php';
    if (isset($_SESSION['cadastro'])) {
        echo "Você está logado, seu nome de usuário é: {$_SESSION['cadastro']['login']}";

    } if (!isset($_SESSION['cadastro'])) {
        header('Location: logar.php');
    }



