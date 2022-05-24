<!-- peça para que o usuario digite um numero, em seguida o converta para float, exibindo em tela tanto o numero em si como o seu tipo de dado. -->
<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nome: <input type="number" name="fnumero">
        <input type="submit">
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['fnumero'];

    settype($numero, 'integer');
    $var = (float)$numero;
    echo 'O número inserido foi: ' . $numero . '<br> O tipo do número é: ' . gettype($numero) . '<br> O número em float fica: ' . $var . '<br>A conversão foi feita para: ' . gettype($var);;
}
?>