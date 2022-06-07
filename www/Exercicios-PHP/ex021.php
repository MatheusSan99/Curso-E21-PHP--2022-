<!-- Crie um programa que realiza a Progressão Aritmetica de 20 elementos, com primeiro termo e razão definidos pelo usuário. (Progressão aritmética - Uma progressão aritmética é uma sequência numérica em que cada termo, a partir do segundo, é igual à soma do termo anterior com uma constante r. O número r é chamado de razão ou diferença comum da progressão aritmética.) -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 21</title>
    <body>
        <h1 style="text-align: center">Progressão Aritmetica</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Digite O Primeiro Valor: <input type="number" name="numero">
        Digite o valor de r(razão):<input type="number" name="r">
        <input type="submit">
        </form>
    </body>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        $r = $_POST['r'];
        $count = 20;
     
            while($count > 0) {
                $numero = $numero + $r;
                echo $numero . '<br>';
                $count--;
            }

    }
?>