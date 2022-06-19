<?php

$remove_Acento = function($palavra) {
    $aRemover = array('ç','Ç','é','É','á','Á','ã','Ã');
    $aPosicionar = array('c','C','e','E','a','A','a','A');
    return str_replace($aRemover, $aPosicionar, $palavra);
};

echo $remove_Acento('maçã');

?>