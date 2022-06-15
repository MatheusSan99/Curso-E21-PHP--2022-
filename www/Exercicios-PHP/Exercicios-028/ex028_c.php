<head>
<title>Exercício 28</title>
<style>
<?php include '../../css_form.css' ?>
</style>
</head>
<?php
require_once 'ex028.php';
require_once 'ex028b.php';
?>
<form action="">
    <label for="botao-excluir">Selecione Um Valor e Exclua</label>
<input type="submit" value="Excluir Cadastro" name="excluir" id="botao-excluir">
</form>

<?php
if (isset($_POST['excluir'])) {
$apagar_Registro = $_POST['excluir'];
    echo 'si';
}

?>