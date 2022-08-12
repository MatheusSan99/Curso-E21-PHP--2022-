<?php

if (isset($_POST['enviar'])) {
    $loginUser = $_POST['login'];
    $senhaUser = $_POST['senha'];

    $procuraLogin = $pdo->query('SELECT login,senha from logins;');

    $logins = $procuraLogin->fetchAll(PDO::FETCH_ASSOC);

    foreach ($logins as $login) {

      if ($login['login'] == $loginUser && $login['senha'] == $senhaUser) {
          echo "Logando...";

          $_SESSION['sucesso'] = true;
          $_SESSION['login'][] = $login;
          header("location: loginSucesso.php");
      } else {
            echo "Login ou Senha Inválidos.";
      }
    }
}