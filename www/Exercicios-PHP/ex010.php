<!-- Mostre número de elementos da lista de nomes, mostre separadamente apenas o terceiro elemento desta lista. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 10</title>
<?php
$lista = array('Matheus', 'Cassia', 'Alexandre', 'Aline', 'Yato');
print_r($lista);
echo '<h2>O Array tem: ' . $resultado = count($lista) . ' Elementos.</h2>';
echo "<h2>O elemento do array na posicao 2 é: " .  $lista[1] . "</h2>";
echo "<h2>O Terceiro elemento do array é: " .  $lista[2] . "</h2>";

?>