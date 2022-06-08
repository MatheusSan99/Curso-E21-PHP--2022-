<!-- Leia de um form um numero que o usuario digitou em seguida exiba em tela o numero digitado. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Ex 7</title>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label class="label" for="numero">Digite um Número:</label>
        <input class="input" type="number" id="numero" class="input" name="numero" placeholder="Digite um número qualquer">
        <input class="botao" type="submit">
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    echo "<p class='texto'>O Número Digitado Foi: $numero</p>";
}
?>