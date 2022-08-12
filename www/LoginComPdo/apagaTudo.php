<?php
if (isset($_POST['apagar'])) {
    require_once 'bancoDeDadosPdo.php';

    $apagaTudo = "DELETE FROM logins;";

    $confirmacao = $pdo->prepare($apagaTudo);
    $confirmacao->execute();
    if ($confirmacao->execute()) {

        echo "<div class='alert alert-success position-absolute fixed-top' role='alert'>Você Apagou Todos Os Logins</div>";
    } else {
        echo "Ocorreu um erro!";
    }
}