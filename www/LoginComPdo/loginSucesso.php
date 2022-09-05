<?php

require_once 'bancoDeDadosPdo.php';

if ($_SESSION['sucesso']) {

    foreach ($_SESSION['login'] as $dados);
    require_once 'html/logado.html';

    if (isset($_POST['logout']))
    {
        $_SESSION['sucesso'] = false;
        header("location: frontPage.php");

    }

} else {
    unset($_SESSION['login']);
    header("location: frontPage.php");
}