<!-- Crie uma estrutura de repetição que percorre a string 'Projeto Entra21': -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Ex 17</title>
<?php

$projeto = 'Projeto Entra21';

    for($i = 0; $i < strlen($projeto); $i++) {
        echo $projeto[$i] . '<br>';
    }
?>