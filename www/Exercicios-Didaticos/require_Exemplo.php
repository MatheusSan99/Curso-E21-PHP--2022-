<?php

require 'funcao_exemplo.php';


// echo quadrado(10);

// include 'tools.php'; # gera warning se não encontrar o arquivo
// require 'tools.php'; # gerará um erro fatal e interrompe. 
echo "<BR> Tabuada do 4 é: <br> ";
echo tabuada(4);

?>    

A unica diferença para o include é que o erro é fatal e não warning!!!

?>