<?php

$sacola1 = array('item1' => 'pera', 'item2' => 'banana', 'item3' => 'leite', 'item4' => 'cafe');
$sacola2 = array('item1' => 'matambre', 'item2' => 'parmesao', 'item3' => 'mussa', 'item4' => 'temperos');
$sacola3 = array('item1' => 'carvao', 'item2' => 'sal', 'item3' => 'oliva', 'item4' => 'cheiroverde');
$sacola4 = array('item1' => 'vodka', 'item2' => 'gelo', 'item3' => 'limão', 'item4' => 'cravo');

$caixa1_da_sogra = array(1 => $sacola1);
$caixa2_do_churr = array(1 => $sacola2, 2 => $sacola3, 3 => $sacola4);
$carro = ['banco' => $caixa2_do_churr, 'mala' => $caixa1_da_sogra];
echo "APENAS COM INDICE<br>";
foreach($caixa2_do_churr as $indiceDosItens) {
    foreach($indiceDosItens as $itens) {
        echo "{$itens} <br><br>";
    }
}   
echo "<br><br>COM INDICE E CHAVE :<br>";
foreach($caixa2_do_churr as $indiceDosItens => $itens) {
    ['item1' => $item1, 'item2' => $item2, 'item3' => $item3, 'item4' => $item4] = $itens;

    echo "{$item1} <br>{$item2} <br>{$item3} <br>{$item4}";
}

echo "<br><br> SELECIONANDO APENAS UM ELEMENTO<br>";
foreach ($carro['banco'] as $caixas) {
    foreach ($caixas as $itens) {
        echo "{$itens} <br> ";
    }
}

echo 'UNSET DE UM ITEM<br>';

unset($carro['banco']);

foreach ($carro as $caixas) {
    foreach ($caixas as $itens) {
        print_r($itens);
    }
}
