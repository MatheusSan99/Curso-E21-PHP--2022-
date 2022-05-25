<!-- Crie um programa que realiza a contagem de 0 a 20, exibindo apenas os numeros pares. -->

<?php
$maximo = 20;
    for($i = 0; $i <= $maximo; $i++) {
        if($i % 2 == 0) {
            echo $i . '<br>';
        }
    }   
?>