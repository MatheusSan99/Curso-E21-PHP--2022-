<!-- Crie um programa que le um valor de inicio e um valor de fim, exibindo em tela a contagem dos numeros dentro desse intervalo. -->

<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Digite o Valor Inicial: <input type="number" name="numero-inicial">
            Digite o Valor Final:   <input type="number" name="numero-final">
            <input type="submit">
        </form>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero_inicial = $_POST['numero-inicial'];
        $numero_final = $_POST['numero-final'];
            if($numero_inicial < $numero_final) {
                while($numero_inicial <= $numero_final) {
                    echo $numero_inicial . '<br>';
                    $numero_inicial++;
                }
            }
    }
?>