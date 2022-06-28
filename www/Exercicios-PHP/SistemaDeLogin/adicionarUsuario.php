<?php

if (isset($_POST['adicionar'])) {

    $user = ['login' => $_POST['login'], 'password' => $_POST['password']];

   $_SESSION['salvaLogin'][] = $user;
}