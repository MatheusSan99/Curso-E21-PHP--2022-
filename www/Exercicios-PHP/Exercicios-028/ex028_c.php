<style>
<?php include '../../css_form.css' ?>
</style>
<title>Exercício 28</title>
<?php

require 'ex028.php';
$matheus = '';
$matheus = 'Matheus';

$idade = 23;
$cep = 89224465;
$arrayNovo = ['Nome' => $matheus, 'Idade' => $idade, 'CEP' => $cep];

array_push($cadastroPessoas,$arrayNovo);

exibeCadastro($cadastroPessoas);

?>