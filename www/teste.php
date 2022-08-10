<?php
function colorCode(string $color): int
{
    $arr = ['Black', 'Brown', 'Red', 'Orange', 'Yellow', 'Green', 'Blue', 'Violet', 'Grey', 'White'];

    foreach ($arr as $indice => $valor) {
      if ($color == $valor) {
          $salvaNumero = $indice;
      }
    }
    return echo $indice;
}
colorCode('Green');
