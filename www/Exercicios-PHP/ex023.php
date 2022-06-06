<!-- Crie um programa que realiza a contagem regressiva de 20 segundos: (from time import sleep) -->
<?php
echo "Horário que o programa iniciou: " . date('h:i:s') . "<br>";
for ($contador = 0; $contador<=20; $contador++) {
    echo "$contador<br>";
    sleep(1);
}
echo "Horário que o programa terminou: " . date('h:i:s') . "<br>";