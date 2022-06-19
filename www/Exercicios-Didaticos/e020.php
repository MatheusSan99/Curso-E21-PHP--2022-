<?php
function percorre($quilometros){
    static $total;
    $total += $quilometros;
    echo "percorreu mais $quilometros do total de $total\n";
}

percorre(100);
percorre(2);
percorre(6);