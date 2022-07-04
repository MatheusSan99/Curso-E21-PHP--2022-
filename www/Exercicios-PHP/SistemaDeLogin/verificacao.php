<?php
function verificaDados(array $arrayEnviado, array $arraySalvo) {

    foreach($arraySalvo as $indice) {
        if ($indice == $arrayEnviado) {

            echo  'Logando...';

            $_SESSION['logado'] = true;
            $_SESSION['salvaLogin'] = $arrayEnviado;
            header("refresh: 1; logado.php");

        } else  {
            $_SESSION['logado'] = false;

        }
    }
}





