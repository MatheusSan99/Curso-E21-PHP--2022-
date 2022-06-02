<?php
function procurarArquivosDoIndice() {
$path = "./";
$diretorio = scandir($path);
echo '<div class="box">';
echo '<div class="titulo">Índice de arquivos das aulas</div>';
echo '</div>';
$x = 0;

echo '<div class="box" >';
foreach ($diretorio as $arquivo) {
    if ($x == 0) {
        echo '<div class="one">';
    }
    echo '<br><a class="arquivos" id="itens-da-lista" href="'  . $path . $arquivo . '">' . "    " . $arquivo . "    " . '</a>';
    $x++;
    if ($x > 5) {
        echo '</div>';
        $x = 0;
    }
}
}
procurarArquivosDoIndice();