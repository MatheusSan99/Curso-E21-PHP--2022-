<!-- Crie um programa que exibe em tela a tabuada de um determinado número fornecido pelo usuário. -->

<html>
    <body>
    <h1 align="center">Tabuada</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Digite o número a ser calculado: <input type="number" name="numero">
        <input type="submit">
        </form>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        $count = 0;
        $tabuada = 1;
        while($count < 10) {
            echo $numero .' x ' . $tabuada . ' é igual a: ' . $numero * $tabuada . '<br>';
            $tabuada++;
            $count++;
        }
    }
?>