<!-- Eleve o valor de num1 a oitava potencia, sendo num1 = 51 -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 14</title>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label class="label" for="campo-input">Digite um número:</label>
         <input class="input" id="campo-input" type="number" name="numero" placeholder="Será Elevado até a 9 Potência">
        <input class="botao" type="submit">
        </form>
    </body>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['numero'];
        $potencia = array(1,2,3,4,5,6,7,8,9,10);
        echo 'O seu número é: ' . $n1 . '<br><br>';
        foreach($potencia as $indice => $resultado)
        echo '<br><br>  Ele será elevado a potência: '
         . $indice 
        . '<br> O resultado é: ' 
        . pow($n1, $indice);
    }
?>