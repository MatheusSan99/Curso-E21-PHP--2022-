<?php
$carro = new stdClass;
$carro -> modelo = 'Pálio';
$carro -> ano = '2002';
$carro -> cor = 'Desbotado';
$carro -> ligado = true;
$pulaLinha = "<br>";

print_r($carro);
echo $pulaLinha;
print $carro -> modelo;
echo $pulaLinha;
print $carro -> ano;
echo $pulaLinha;
print $carro -> cor;
echo $pulaLinha;
print $carro -> ligado;

    if($carro -> ligado) {
        print ('Carro está ligado');

    }

?>