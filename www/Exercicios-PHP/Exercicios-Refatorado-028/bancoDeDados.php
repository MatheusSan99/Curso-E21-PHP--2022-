<?php

$cadastroDePessoas = [
    "1" => ["Nome"=> "Marli", "Idade" => 20, "Cep" => "123456-789"],
    "2" => ["Nome" => "Claudio", "Idade" => 21, "Cep" => "123456-789"],
    "3" => ["Nome" => "Debora", "Idade" => 18, "Cep" => "123456-789"],
    "4" => ["Nome" => "Thiago", "Idade" =>22, "Cep" => "123456-789"],
    "5" =>["Nome" => "Willian", "Idade" => 18, "Cep" => "123456-789"]
];

if (!$_SESSION['cadastros']) {
    $_SESSION['cadastros'] = $cadastroDePessoas;
}

