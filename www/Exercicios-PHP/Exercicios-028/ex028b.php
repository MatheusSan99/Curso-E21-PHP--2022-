<head>
    <title>Ex 028b</title>
    <style>
        <?php include '../../css_form.css' ?>
        <?php include 'alterar_dados.css' ?>
    </style>
</head>
<?php
session_start();
session_destroy();
session_start();
if (!isset($_SESSION["required"])) {
    $_SESSION['required'] = true;
    require_once 'ex028.php';  
    $_SESSION['cadastro'] = $cadastroPessoas;
    
}
?>

<body>
    <form method="post">
        <label for="nome">Digite o Nome:</label>
        <input type="text" name="nome" placeholder="Insira o nome sem acentos">

        <label for="idade">Digite a Idade:</label>
        <input type="number" name="idade" placeholder="1 a 100">

        <label for="cep">Digite o CEP:</label>
        <input type="number" name="CEP" placeholder="123.456.789-0">
        <input type="submit">
    </form>
    <form method="post" class="edit-table">
        <label for="nome-edit">Editar Nome:</label>
        <input type="text" name="nome-edit" placeholder="Edite o nome sem acentos">

        <label for="idade-edit">Editar Idade:</label>
        <input type="number" name="idade-edit" placeholder="Edite o número">

        <label for="cep-edit">Editar Cep:</label>
        <input type="number" name="cep-edit" placeholder="Edite o CEP">
        <label for="selecionar-cadastro" class="select-user">Selecione O Cadastro</label>
        <input type="search" name="search" placeholder="Nome do Cadastro">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $nome_adicionar = $_POST['nome'];
        $idade_adicionar = $_POST['idade'];
        $cep_adicionar = $_POST['CEP'];
        $selecionar_usuario = $_POST['search'];
        $editar_nome = $_POST['nome-edit'];
        $editar_idade = $_POST['idade-edit'];
        $editar_cep = $_POST['cep-edit'];

        $adiciona_Pessoas = [
            'Nome' => $nome_adicionar,
            'Idade' => $idade_adicionar,
            'CEP' =>  $cep_adicionar
        ];

        array_push($_SESSION['cadastro'], $adiciona_Pessoas);

        foreach ($_SESSION['cadastro'] as $indice) {
            ['Nome' => $nome, 'Idade' => $idade, 'CEP' => $cep] = $indice;
            echo "<div class='tabela'>";

            echo "<div class='informacoes-gerais'> Nome: {$nome} </div>";
            echo "<div class='informacoes-gerais'> Idade: {$idade}</div>";  
            echo "<div class='informacoes-gerais'> CEP: {$cep}</div>";
            echo "</div>";
            echo "<br>";
            if ($nome == $selecionar_usuario) {
                echo 'nome igual';
            }
            else if($nome != $selecionar_usuario) {
                echo 'nome dif';
            }
        }
    }


    ?>
   
</body>