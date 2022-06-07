<!-- Peça para que o usuario digite um número, em seguida o converta para float, exibindo em tela tanto o número em si como o seu tipo de dado. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 8</title>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label class="label" for="numero">Digite um Número</label>
        <input class="input" type="number" id="numero" step="any" name="numero" placeholder="Int para Float">
        <input class="botao" type="submit">
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = floatval($_POST['numero']);

    $numeroFormatado = number_format($numero, 1);

    echo "<p class='texto'>O número em Float fica: $numeroFormatado</p>";
}
?>