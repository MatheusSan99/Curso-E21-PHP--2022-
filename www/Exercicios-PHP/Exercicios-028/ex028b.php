<head>
    <title>Ex 028b</title>
    <style>
        <?php include '../../css_form.css' ?><?php include 'alterar_dados.css' ?>
    </style>
</head>
<?php
session_start();
require_once 'ex028.php';
?>

<body>
    <form method="post" action="">
        <ul class="lista" id="adiciona_na_lista">
            <label for="nome">Digite o Nome:</label>
            <li class="primeira-lista"><input type="text" name="nome" placeholder="Insira o nome sem acentos"></li>

            <label for="idade">Digite a Idade:</label>
            <li class="primeira-lista"><input type="number" name="idade" placeholder="1 a 100"></li>

            <label for="cep">Digite o CEP:</label>
            <li class="primeira-lista"> <input type="number" name="CEP" placeholder="123.456.789-0"></li>
            <li class="primeira-lista"><input type="submit" value="adicionar"></li>
        </ul>
    </form>
    <?php
    if (isset($_POST['restaura'])) {
        $_SESSION['cadastro'] = $cadastroPessoas;
    }

    if (isset($_POST['adicionar'])) {
        array_push(
            $_SESSION['cadastro'],
            array("Nome" => $_POST['nome'], "Idade" => $_POST['idade'], "CEP" => $_POST['CEP'])
        );
    }

    foreach ($_SESSION['cadastro'] as $indice) {
        ['Nome' => $nome, 'Idade' => $idade, 'CEP' => $cep] = $indice;
        echo "<div class='tabela'>";

        echo "<div class='informacoes-gerais'> Nome: {$nome} </div>";
        echo "<div class='informacoes-gerais'> Idade: {$idade}</div>";
        echo "<div class='informacoes-gerais'> CEP: {$cep}</div>";
        echo "</div>";
        echo "<br>";
    }
    ?>
    <form method="post">
        <input type="submit" name="restaura" value="restaura">
    </form>
</body>