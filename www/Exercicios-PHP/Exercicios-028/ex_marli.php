<?php
$sacola1 = array('item1' => 'pera', 'item2' => 'banana', 'item3' => 'leite', 'item4' =>'cafe');
$sacola2 = array('item1' => 'matambre', 'item2' =>'parmesao', 'item3' => 'mussa', 'item4' => 'temperos');
$sacola3 = array('item1' => 'carvao', 'item2' =>'sal', 'item3' => 'oliva', 'item4' => 'cheiroverde');
$sacola4 = array('item1' => 'vodka', 'item2' =>'gelo', 'item3' => 'limão', 'item4' => 'cravo');

$caixa1_da_sogra = array( 0 => $sacola1);
$caixa2_do_churr = array( 0 => $sacola1, 1 => $sacola2, 2 => $sacola3, 3=> $sacola4);

$carro = array ($caixa1_da_sogra, $caixa2_do_churr);


foreach ($carro as $compras){    
    foreach ($compras as $itens ){
        foreach ($itens as $sacol)   {     
        echo "<br>";
    echo $sacol;
    }          
    }
}

?>