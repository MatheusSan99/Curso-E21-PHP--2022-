<?php

$loginSalvo = ['login' => 'admin', 'password' => 'senha'];


if (!isset($_SESSION['salvaLogin'])) {
    $_SESSION['salvaLogin'] = $loginSalvo;
}