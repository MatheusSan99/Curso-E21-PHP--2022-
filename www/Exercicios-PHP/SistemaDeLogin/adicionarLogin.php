<?php

if (isset($_POST['adicionar'])) {

    $loginUser = ['login' => $_POST['login'], 'password' => $_POST['password']];

    $_SESSION['cadastros'][] = $loginUser;
}
