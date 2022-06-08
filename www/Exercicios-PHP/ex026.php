<!-- Crie um programa que pede ao usuario uma frase ou palavra, verifique se a frase é palindromo ou não. E exiba o resultado. : A base do teto desaba. A cara rajada da jararaca. Acuda cadela da Leda caduca. A dama admirou o rim da amada. A Daniela ama a lei? Nada! Adias a data da saída. A diva em Argel alegra-me a vida. A droga do dote é todo da gorda. 
 Crie um programa que pede ao usuario uma frase ou palavra, verifique se a frase é palindromo ou não.
 E exiba o resultado. : 
 A base do teto desaba. 
 A cara rajada da jararaca. 
 Acuda cadela da Leda caduca. 
 A dama admirou o rim da amada. 
 A Daniela ama a lei? Nada!
 Adias a data da saída. A diva em Argel alegra-me a vida. A droga do dote é todo da gorda. -->
 <body>
 <style>
     <?php include '../css_form.css'?>
 </style>
 <title>Ex 26</title>
<form  class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="input" class="label">Digite a palavra e irei conferir se corresponde a um palíndromo!</label>
         <input class="input" type="text" id="input"name="palavra1" placeholder="Digite a palavra ou frase!">    <br><br>
        <input class="botao" type="submit">
        </form>
    </body>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $primeiraPalavra = strtolower($_POST['palavra1']);
        $primeiraPalavra = preg_replace("/[^a-z]/", "", $primeiraPalavra);

          if($primeiraPalavra == strrev($primeiraPalavra)) {
            echo "<p class='texto'>Legal! Sua palavra é um palindromo</p>";
            
          }
          else {
              echo "<p class='texto'>Sua palavra não é um palindromo :(</p>";
          }
    }
    ?>
</body>