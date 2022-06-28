<?php
session_start();
require_once 'logout.php';
    if (isset($_SESSION['salvaLogin'])) {
        echo "Você está logado, seu nome de usuário é: {$_SESSION['salvaLogin']['login']}";

    } if (!isset($_SESSION['salvaLogin'])) {
        header('Location: logar.php');
    }



