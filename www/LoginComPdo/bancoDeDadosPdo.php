<?php
try {
    $caminhoDatabase = 'banco.sqlite';
    $pdo = new PDO('sqlite:' . $caminhoDatabase);
    $_SESSION['pdo'] = $pdo;
}
    catch (PDOException $erroPDO) {
    echo "Ocorreu um erro com o Banco de dados." . $erroPDO->getMessage();
}
session_start();
