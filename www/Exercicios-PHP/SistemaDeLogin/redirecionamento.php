<?php

session_start();
require_once 'login.php';


if ($logado == true) {

    echo  $logado;
    echo "Login concluido, você será redirecionado para o index!";
    header("refresh: 1; login.php");
    require_once 'usuariologado.php';

}

?>