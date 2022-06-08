<!-- Crie um cadastro de Pessoas com 5 pessoas utilizando Array. Cada pessoa deve ter os seguintes valores cadastrados: Nome, idade, Cep. A Chave primária da Array será o numero 1,2,3,4,5. -->
<style>
    <?php include '../../css_form.css' ?>
</style>
<title>Exercício 28</title>
<?php

$cadastroPessoas = [
1 => ['Nome' => 'Marli', 'Idade' => 30, 'CEP' => '123'],
2 => ['Nome' => 'Willian', 'Idade' => 18, 'CEP' => '234'],
3 => ['Nome' => 'Cláudio', 'Idade' => 27, 'CEP' => '456'],
4 => ['Nome' => 'Thiago', 'Idade' => 25, 'CEP' => '789'],
5 => ['Nome' => 'Bruno', 'Idade' => 26, 'CEP' => '000'],
];
function exibeCadastro(array &$cadastro) {
foreach($cadastro as $informacoesIndices => $dadosIndice) {
    //criei uma lista e atribui o valor de cada indice a uma variavel, pegando todas elas do $dadosindice

    ['Nome' => $nome, 'Idade' => $idade, 'CEP' => $cep] = $dadosIndice;

    echo "Nome: {$nome}<br>";
    echo "Idade: {$idade}<br>";
    echo "CEP: {$cep}<br>";
}
}
?>