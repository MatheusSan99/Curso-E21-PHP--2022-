<!-- Crie um programa que exibe em tela a tabuada de um determinado número fornecido pelo usuário. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 22</title>
    <body>
  <h1 style="text-align: center">Tabuada</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
     <label class="label" for="campo">Digite o número a ser calculado:</label>
         <input class="input" type="number" name="numero">
        <input class="botao" type="submit">
        </form>
    </body>
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