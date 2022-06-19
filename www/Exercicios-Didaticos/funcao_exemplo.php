<?php

function tabuada($numero) {
    for($multiplicador = 1; $multiplicador <=10; $multiplicador++) {
    echo $numero . " x " . $multiplicador . " = " . $numero * $multiplicador . '<br>';
    }
}