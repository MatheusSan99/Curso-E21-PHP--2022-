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
        <h1>Edição do Cadastro: <?php echo $_SESSION['cadastros'][$_GET['alterar']]['Nome'] ?></h1>
       <a href="adicionaCadastro.php"><input type="submit" value="Cancelar" id="cancelar"><a/>
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

    $nome = $_POST['alteracaoNome'];
    $idade = $_POST['alteracaoIdade'];
    $cep = $_POST['alteracaoCep'];

    $_SESSION['cadastros'][$_GET['alterar']]['Nome'] = $nome;
    $_SESSION['cadastros'][$_GET['alterar']]['Idade'] = $idade;
    $_SESSION['cadastros'][$_GET['alterar']]['Cep'] = $cep;

    header("refresh: 1; adicionaCadastro.php");

}
