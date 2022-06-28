<?php
session_start();
require_once 'logout.php';

    if (isset($_SESSION['cadastros'])) {
        echo "Você está logado, seu nome de usuário é:";
       echo ($_SESSION['cadastros']);
    }
    else
        echo  'voce nao esta logado';
