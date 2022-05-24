<?php
// crie uma lista com 5 nomes de pessoas, e imprima os nomes
$lista = array('Matheus', 'Cassia','Alexandre','Aline','Yato');

   foreach($lista as $a) {

    echo $a . "<br>";
   } 

   foreach($lista as $indice => $nome) {

    echo 'O nome no indíce ' . $indice . " é: " . $nome . '<br>';
   }
