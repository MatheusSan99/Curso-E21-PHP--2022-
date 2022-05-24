<!-- Eleve o valor de num1 a oitava potencia, sendo num1 = 51 -->
<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Digite um número: <input type="number" name="numero">
        <input type="submit">
        </form>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['numero'];
        $potencia = array(1,2,3,4,5,6,7,8,9,10);
        echo 'O seu número é: ' . $n1 . '<br><br>';
        foreach($potencia as $indice => $resultado)
        echo '<br>  Ele será elevado a potência: ' . $indice . '<br> O resultado é: ' . pow($n1, $indice);

    }
?>