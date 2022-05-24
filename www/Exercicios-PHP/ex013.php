<!-- Realize as operacoes de multiplicação e de divisao entre os valores das variaveis num1 e num2 e exiba em tela. -->
<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Numero 1: <input type="number" name="numero1">
        Numero 2: <input type="number" name="numero2">
        <input type="submit">
        </form>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];

        echo 'O primeiro número foi: ' . $n1 . '<br> O segundo número foi: ' . $n2 . '<br> O Resultado da multiplicação entre os dois é: ' . $n1 * $n2 . '<br> O Resultado da divisão do primeiro número com o segundo é: ' . $n1 / $n2;
    }
?>