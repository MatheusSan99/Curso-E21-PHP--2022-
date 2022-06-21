<?php 
session_start();

?>
<head>
    <title>Ex 028b</title>
    <style>
        <?php include '../../css_form.css' ?><?php include 'alterar_dados.css' ?>
    </style>
</head>
<?php require_once 'ex028.php';?>
<body>
    <form method="post" action="">
        <ul class="lista" id="adiciona_na_lista">

            <li class="primeira-lista">
                <input type="text" name="nome" id="nome" placeholder="Insira o nome sem acentos">
                    <label for="nome">Digite o Nome:</label>
            </li>

            <li class="primeira-lista">
                <input type="number" name="idade"  id="idade" placeholder="1 a 100">
                <label for="idade">Digite a Idade:</label>
            </li>

            <li class="primeira-lista">
                <input type="number" name="CEP" id="cep" placeholder="123.456.789-0">
                <label for="cep">Digite o CEP:</label>
            </li>

            <li class="primeira-lista">
                <input type="submit" value="adicionar" name="adicionar">
            </li>

        </ul>
    </form>

    <?php

    if (isset($_POST['restaura'])) {
        if (!empty($cadastroPessoas)) {
            $_SESSION['cadastro'] = $cadastroPessoas;
        }
    }

    if (isset($_POST['adicionar'])) {
        $_SESSION['cadastro'][] = array("Nome" => $_POST['nome'], "Idade" => $_POST['idade'], "CEP" => $_POST['CEP']);
    }

    foreach ($_SESSION['cadastro'] as $indice) {
        ['Nome' => $nome, 'Idade' => $idade, 'CEP' => $cep] = $indice;

        echo "<div class='informacoes-gerais'> Nome: {$nome} </div>";
        echo "<div class='informacoes-gerais'> Idade: {$idade}</div>";
        echo "<div class='informacoes-gerais'> CEP: {$cep}</div>";
        echo "</div>";
        echo "<br>";
        echo "<a href='ex028_apaga.php?Delete='><input type='submit' name='apagar' value='Apagar {$nome}'><a/>";
    }

    ?>
    <form method="post">
        <input type="submit" name="restaura" value="restaura">
    </form>
</body>