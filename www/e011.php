<?php
$nome = 'Matheus';
$caipirinha = array('Limao','Açucar','Vodka','Agua','Engov');
echo $caipirinha[1];

$tipo = gettype($caipirinha);
$tipo2 = gettype($nome);

echo '<br>';

print_r(($tipo));
print_r("<br>$tipo2");

echo '<br>';
var_dump($tipo);


?>