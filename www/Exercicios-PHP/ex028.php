<!-- Crie um cadastro de Pessoas com 5 pessoas utilizando Array. Cada pessoa deve ter os seguintes valores cadastrados: Nome, idade, Cep. A Chave primeria da Array será o numero 1,2,3,4,5. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 28</title>
<?php

$cadastroDePessoas = [
    1 => array('Bruno', 'Idade' => 27, 'CEP' => "Bruno CEP"),
    2 => array('Junior', 'Idade' =>  30, 'CEP' => "Junior CEP"),
    3 => array('Marli', 'Idade' => 29, 'CEP' => "Marli CEP"),
    4 => array('Thiago', 'Idade' =>  25, 'CEP' => "Thiago CEP"),
    5 => array('Willian', 'Idade' =>  18, 'CEP' => "Willian CEP")
];

    foreach($cadastroDePessoas as $arraysCadastrados) {
        echo '<br>';
        foreach($arraysCadastrados as $chaveIdentificadoraDoAtributo => $dadoInformado) {
            echo $chaveIdentificadoraDoAtributo . ' : ';
            echo $dadoInformado . '<br>'; 
           
        }
    }
?>