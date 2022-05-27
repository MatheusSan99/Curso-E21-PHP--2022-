<!-- Solicite os valores de num1 e num2. Some os valores das variaveis num1 e num2: sendo num1=52 e num2 = 106. por fim exiba o resultado. -->
<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Numero1: <input type="number" name="fnumero1">
        Numero2: <input type="number" name="fnumero2">
        <input type="submit">
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['fnumero1'];
    $numero2 = $_POST['fnumero2'];
    $var1 = 52;
    $var2 = 106;
    
    echo 'O primeiro número digitado foi: ' . $numero . '<br> O segundo número foi: ' . $numero2 . '<br> A soma dos dois número é igual a: ' . $numero + $numero2 . '52 + 106 = ' . $var1 + $var2;
}
?>
<?php
?>