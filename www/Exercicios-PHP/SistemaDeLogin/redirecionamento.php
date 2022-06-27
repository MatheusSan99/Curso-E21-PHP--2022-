<?php
require 'verificacao.php';
if ($logado) {

    echo  $logado;
    echo "Login concluido, você será redirecionado para o index!";

    header("refresh: 2; usuariologado.php");
   

}

?>