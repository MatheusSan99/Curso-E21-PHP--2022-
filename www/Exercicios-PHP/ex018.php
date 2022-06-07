<!-- Crie uma lista com 8 elementos de uma lista de compras de supermercado, por meio de um laço de repetição for, liste individualmente cada um dos itens dessa lista. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 18</title>
<?php

$listaDeCompras = array('Arroz','Feijão','Frango','Suco','Produtos de Limpeza','Macarrão','Doces','Frutas');

    foreach($listaDeCompras as $indice => $nomeItemLista) {
        echo $listaDeCompras[$indice] . '<br>';
    }

?>