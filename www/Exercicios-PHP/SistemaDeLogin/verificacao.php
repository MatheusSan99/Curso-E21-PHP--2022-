<?php 
    if($permissao == $loginAcesso) {
        $logado = true;
        header("refresh: 1; redirecionamento.php");
    } else {
        echo 'Login ou senha incorretos!';
        $logado = false;
    }

?>