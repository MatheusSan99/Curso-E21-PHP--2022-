<!-- Crie um programa que pede ao usuário um número qualquer, em seguida retorno se este número é primo ou não, caso não, retorne também quantas vezes esse número é divisível. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 25</title>
<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Digite um número <input type="number" name="numero">
        <input type="submit">
        </form>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        $contador = $numero;
        if ($numero % 2 != 0) {
            echo 'Este é um número primo';
            
    
    }
        
}
?>