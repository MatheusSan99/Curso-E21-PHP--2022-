<?php
try {
    $caminhoDatabase = 'banco.sqlite';
    $pdo = new PDO('sqlite:' . $caminhoDatabase);
    $pdo->exec('CREATE TABLE formularios(id INTEGER PRIMARY KEY, nome TEXT, idade INTEGER, cep TEXT, saldo INTEGER);');
    $_SESSION['pdo'] = $pdo;
}
catch (PDOException $erroPDO) {
}
session_start();
