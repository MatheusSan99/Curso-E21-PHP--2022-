<!-- Crie um cadastro de Pessoas com 5 pessoas utilizando Array. Cada pessoa deve ter os seguintes valores cadastrados: Nome, idade, Cep. A Chave primária da Array será o numero 1,2,3,4,5. -->
<style>
    <?php include '../../css_form.css' ?>
</style>

<title>Exercício 28</title>
<?php

$cadastroPessoas = [
    1 => ['Nome' => 'Bruno', 'Idade' => 26, 'CEP' => '000'],
    2 => ['Nome' => 'Cláudio', 'Idade' => 27, 'CEP' => '456'],
    3 => ['Nome' => 'Marli', 'Idade' => 30, 'CEP' => '123'],
    4 => ['Nome' => 'Thiago', 'Idade' => 25, 'CEP' => '789'],
    5 => ['Nome' => 'Willian', 'Idade' => 18, 'CEP' => '234']
];

if (!$_SESSION['cadastro']) {
    echo "<br> Ola mundo cruel, cadastrou já era... estou renovando tudo por aqui entendeu? <br> <br> ";
    $_SESSION['cadastro'] = $cadastroPessoas;
}
