<style>
    <?php include '../../css_form.css' ?>
</style>
<?php require_once 'ex028.php';
require_once 'ex028b.php'?>
<title>Ex 28c</title>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="nome">Digite um novo nome:</label>
         <input  id="nome" type="number" name="nome" placeholder="Substitua o nome">
         <label for="posicao">selecione a posicao:</label>
         <input  id="posicao" type="number" name="posicao" placeholder="posicao">
         <label for="idade">Digite a Idade:</label>
        <input type="number" name="idade" placeholder="Substitua a Idade">
        <label for="cep">Digite o CEP:</label>
        <input type="number" name="cep" placeholder="Substitua o CEP">
        <input type="submit">
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $alteraNome = $_POST['nome'];
        $alteraIdade = $_POST['idade'];
        $alteraCep = $_POST['cep'];
        $posicao = $_POST['posicao'];
    }
?>