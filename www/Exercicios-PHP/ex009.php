<?php
// crie uma turma com 5 nomes de pessoas, e imprima os nomes
$turma = array('Bruno', 'Marli', 'Willian', 'Debora', 'Junior');

foreach ($turma as $a) {

   echo $a . "<br>";
}

foreach ($turma as $indice => $nome) {

   echo 'O nome no indíce ' . $indice . " é: " . $nome . '<br>';
}
