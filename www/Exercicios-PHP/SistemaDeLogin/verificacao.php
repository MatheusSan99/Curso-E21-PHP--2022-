<?php

function verificaDados(array $arrayEnviado, array $arraySalvo) {

    foreach($arraySalvo as $indice) {
        if ($indice == $arrayEnviado) {
            echo  'coincide';
            header("refresh: 1; logado.php");

        } else  {
            echo 'Login ou senha incorretos!';
        }
    }
}