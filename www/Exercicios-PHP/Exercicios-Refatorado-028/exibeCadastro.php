<?php

require_once 'bancoDeDados.php';
    function exibeCadastro(array $arraydeCadastros) {
    foreach ($arraydeCadastros as $indices => $informacoes) {
        ['Nome' => $nome, 'Idade' => $idade, 'Cep' =>$cep] = $informacoes;

        echo "<table class='tabela'>";

        echo "<td> {$nome} </td>";
        echo "<td> {$idade} </td>";
        echo "<td> {$cep} </td>";
        echo "<td><a href= 'alterarCadastro.php?alterar={$indices}'><input type='submit' class='botao-editar' name='alterar' value='Editar {$nome}'></a></td>";

        echo "<td><a href= 'apagaCadastro.php?excluir={$nome}' ><input type='submit' class='botao-excluir' name='excluir' value='Excluir {$nome}'></a></td>";

        echo "</table>";
    }
}
