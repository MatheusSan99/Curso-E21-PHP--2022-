<!-- Realize as operacoes de multiplicação e de divisao entre os valores das variaveis num1 e num2 e exiba em tela. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 13</title>
<body>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Numero 1: <input type="number" step="any" required name="numero1">
        Numero 2: <input type="number" step="any" required name="numero2">
        <input type="submit">
        </form>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];
        if($n1 && $n2 > 0)  {
        echo "<h3>O primeiro número foi: $n1</h3>";
        echo "<h3>O segundo número foi: $n2</h3>";
        echo "$n1 * $n2 é igual a: " . $n1*$n2 . '<br>';
        echo "$n1 / $n2 é igual a: " . $n1/$n2;
        }
    }
?>