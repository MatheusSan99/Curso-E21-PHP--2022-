<?php
session_start();
require_once 'bancoDeDados.php';
?>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/formularioedicao.css">
        <meta charset="UTF-8">
        <title>Editar Cadastro</title>
    </head>
    <body>
        <h1>Edição do Cadastro</h1>
    <form method="post">
        <fieldset>
            <legend>Edite os Dados</legend>
                <label for="nome">Editar o Nome:</label>
                <input type="text" name="alteracaoNome" id="nome" required placeholder="Insira o nome desejado">

                <label for="idade">Editar a Idade:</label>
                <input type="number" name="alteracaoIdade"  id="idade"  required placeholder="1 a 100">

                <label for="cep">Editar o CEP:</label>
                <input type="number" name="alteracaoCep" id="cep" required placeholder="XXXXX-XXX">
            <label for="finalizar" id="setinha"></label>
               <input type="submit" class="botao" value="Finalizar" name="finalizar" id="finalizar">
        </fieldset>
    </form>
    </body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alteracaoCompleta =
            ['Nome' => $_POST['alteracaoNome'],
            'Idade' => $_POST['alteracaoIdade'],
            'Cep' => $_POST['alteracaoCep']];

    $indiceASerExcluido = array_search($_GET['alterar'], array_column($_SESSION['cadastros'], 'Nome'));

    array_splice($_SESSION['cadastros'], ($indiceASerExcluido), 1);

   $_SESSION['cadastros'][] = $alteracaoCompleta;

    header("refresh: 1; adicionaCadastro.php");

}
