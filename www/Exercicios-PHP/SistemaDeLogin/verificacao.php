<?php

    function verificaDados(array $loginUser, array $loginSalvo) {

        if ($loginUser == $loginSalvo) {

            header("refresh: 1; logado.php");

        }  else {

                echo  "Login ou senha incorretos!";
        }

    }