<?php
session_start();
require_once 'logout.php';

if (isset($_SESSION['cadastros'])) {
    echo "Você está logado, seu nome de usuário é:";

}
else
    echo  'voce nao esta logado';