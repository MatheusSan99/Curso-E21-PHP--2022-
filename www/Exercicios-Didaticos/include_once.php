<?php
$a = 1;
echo "<BR> Tabuada do 1 ao 10 é: <br>";
while ($a <=10){
    include_once 'funcao_exemplo.php'; # gera warning se não encontrar o arquivo
    echo tabuada($a) . '<br>';
    $a++; 
}
// inclui o arquivo uma unica vez, mesmo dentro do laço
//require_once também tem a mesma funcionalidade
?> 