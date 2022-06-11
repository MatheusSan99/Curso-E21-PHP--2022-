<style>
<?php include '../../css_form.css' ?>
</style>
<?php
session_start();
if(!isset($_SESSION["required"])){
    $_SESSION['required'] = true;
    require_once 'ex028.php';
    $_SESSION['cadastro'] = $cadastroPessoas;
}


?>
<title>Ex 28b</title>

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
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome_adicionar = $_POST['nome'];
        $idade_adicionar = $_POST['idade'];
        $cep_adicionar = $_POST['CEP'];
       
        $adiciona_Pessoas = [
            'Nome' => $nome_adicionar,
            'Idade' => $idade_adicionar,
            'CEP' =>  $cep_adicionar
        ];
       
       array_push($_SESSION['cadastro'], $adiciona_Pessoas);

     foreach($_SESSION['cadastro'] as $indice) {
        ['Nome' => $nome, 'Idade' => $idade, 'CEP' => $cep] = $indice;
       
        echo "Nome: {$nome}<br>";
        echo "Idade: {$idade}<br>";
        echo "CEP: {$cep}<br>";
     }
    }
   


    ?>
</body>