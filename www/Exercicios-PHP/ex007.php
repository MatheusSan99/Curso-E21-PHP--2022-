<!-- Leia de um form um numero que o usuario digitou em seguida exiba em tela o numero digitado. -->
<html>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Número: <input type="number" name="fnumero">
        <input type="submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['fnumero'];

    settype($numero, 'integer');
    $tipo = gettype($numero);
    echo 'O número digitado foi: ' . $numero . '<br>O tipo é:' . $tipo;
}
?>