<!-- Crie um programa que realiza a contagem de 0 a 20, exibindo apenas os numeros pares. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 20</title>
<?php
$maximo = 20;
    for($i = 0; $i <= $maximo; $i++) {
        if($i % 2 == 0) {
            echo $i . '<br>';
        }
    }   
?>