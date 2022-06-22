<?php

require_once 'bancoDeDados.php';

    function exibeCadastro(array $arraydeCadastros) {
        $idadeTotal = 0;
        $saldoTotal = 0;
        $totalPessoas = 0;
        $mediaSaldo = 0;
        $mediaIdade = 0;

    foreach ($arraydeCadastros as $indices => $informacoes) {
        ['Nome' => $nome, 'Idade' => $idade, 'Cep' => $cep, 'Saldo' => $saldo] = $informacoes;

        $saldoTotal += $saldo;
        $idadeTotal += $idade;
        $mediaSaldo = round($saldoTotal / count($arraydeCadastros),2);
        $mediaIdade =  round($idadeTotal / count($arraydeCadastros));
        $totalPessoas = count($arraydeCadastros);

        echo "<table class='tabela'>";

        echo "<td> {$nome} </td>";
        echo "<td> {$idade} </td>";
        echo "<td> {$cep} </td>";
        echo "<td> R$ {$saldo} </td>";
        echo "<td><a href= 'alterarCadastro.php?alterar={$indices}'><input type='submit' class='botao-editar' name='alterar' value='Editar {$nome}'></a></td>";

        echo "<td><a href= 'apagaCadastro.php?excluir={$nome}' ><input type='submit' class='botao-excluir' name='excluir' value='Excluir {$nome}'></a></td>";

        echo "</table>";


    }
        echo
        "<details>
           <summary>Mais Detalhes:</summary>
                <p>A soma total do saldo é: R$ $saldoTotal</p>
                <p>A média de saldo é: R$ $mediaSaldo</p>
                <p>O número total de pessoas no formulário é: $totalPessoas</p>
                <p>A média de idade das pessoas formulário é: $mediaIdade</p>
        </details>";
}
