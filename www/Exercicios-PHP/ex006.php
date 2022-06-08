<!-- Exiba em tela o valor e o tipo de dado da variavel num1: Sendo num1=1975 -->
<style>
        <?php include '../css_form.css' ?>
</style>
<title>Ex 6</title>
<?php
$num1 = 1975;
$tipovariavel = gettype($num1);

echo "<h2>O número é: $num1, e seu tipo é: $tipovariavel.</h2";
