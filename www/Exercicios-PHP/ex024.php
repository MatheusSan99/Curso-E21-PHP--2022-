<!-- Crie um programa que realiza a contagem de 1 a 100, usando apenas números impares ao final do processo exiba em tela quantos números impares foram encontrados nesse intervalo, assim como a soma dos mesmos: -->

<?php
$inicio = 0;
$fim = 100;
$soma = 0;
        while($inicio < $fim) {
            $inicio++;
            if($inicio % 2 != 0) {
                $soma +=$inicio;
                echo $inicio . '<br>';
            }
            
        }
        echo 'A soma dos números é igual a: ' . $soma;
      