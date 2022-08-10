<?php
$databasepath = __DIR__ . 'database.sql';
$pdo = new PDO('sqlite:' . $databasepath);

// $pdo->exec('CREATE TABLE  clientes (id INTEGER PRIMARY KEY, name TEXT);');

// $sqlInsert = "INSERT INTO clientes (name) VALUES ('Matheus')";
// $pdo->exec($sqlInsert);

$dataSearch = $pdo->query('SELECT * FROM clientes WHERE id = 1;');
// $clientList = $dataSearch->fetchAll(PDO::FETCH_ASSOC);

// foreach($clientList as $clientData) {
//     echo $clientData;
// }
var_dump($dataSearch);
?>