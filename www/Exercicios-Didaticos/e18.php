<?php
$x = 100;
$x = ($x + 1);  
$x +=11;
print($x);
echo "<br>";
$x++;
print($x);
echo "<br>";
$x -= 5;
print ($x);
echo "<br>";
$x = $x - 8;
print ($x);
echo "<br>";


//mult e div
$x /=2;
print ($x);
echo "<br>";
$x = $x * 3;
print ($x);
echo "<br>";

echo "xxxxxxxxxxxxxxx<br>";

print $x++.''; // retorna 150 e aumenta pra 101
echo "<br>";
print $x; //retorna 151 e nao incrementa nada
echo "<br>";
print ++$x. ''; //aumenta pra 152 e imprime
?>