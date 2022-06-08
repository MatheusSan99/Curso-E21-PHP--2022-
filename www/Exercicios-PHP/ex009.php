<!-- Crie uma turma com 5 nomes de pessoas, e imprima os nomes -->
<style>
   <?php include '../css_form.css' ?>
</style>
<title>Ex 9</title>
<?php
$turma = array('Bruno', 'Marli', 'Willian', 'Debora', 'Junior');

foreach ($turma as $a) {
<<<<<<< HEAD
   echo $a . "<br>";
}

foreach ($turma as $indice => $nome) {
   echo 'O nome no indíce ' . $indice . " é: " . $nome . '<br>';
=======

   echo "| Com For | O nome é $a <br><br>";
}

foreach ($turma as $indice => $nome) {

   echo "| Com ForEach | O nome no indíce $indice é $nome <br><br>";
>>>>>>> ae804c89b5d0946f0af9215db52657da8ffda605
}
