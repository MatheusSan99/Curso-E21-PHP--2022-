<?php

if (isset($_POST['adicionar']) && !empty($_POST['senha']) && !empty($_POST['login'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $sqlInsert = "INSERT INTO logins(login,senha) VALUES (:login,:senha);";

    $preparacao = $pdo->prepare($sqlInsert);

    $preparacao->execute([
        ':login' => $login,
        ':senha' => $senha
    ]);

    echo "<div class='alert alert-success position-absolute fixed-top' role='alert'>Você Adicionou Um Novo Login</div>";

}