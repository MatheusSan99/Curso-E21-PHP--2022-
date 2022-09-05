<?php
try {
    $caminhoDatabase = 'banco.sqlite';
    $pdo = new PDO('sqlite:' . $caminhoDatabase);
    $pdo->exec('CREATE TABLE logins(id INTEGER PRIMARY KEY, login TEXT, senha TEXT);');
    $_SESSION['pdo'] = $pdo;
}
    catch (PDOException $erroPDO) {
}
session_start();
