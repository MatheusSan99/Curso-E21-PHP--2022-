<!-- Crie um programa que pede ao usuario uma frase ou palavra, verifique se a frase é palindromo ou não. E exiba o resultado. : A base do teto desaba. A cara rajada da jararaca. Acuda cadela da Leda caduca. A dama admirou o rim da amada. A Daniela ama a lei? Nada! Adias a data da saída. A diva em Argel alegra-me a vida. A droga do dote é todo da gorda. 
 Crie um programa que pede ao usuario uma frase ou palavra, verifique se a frase é palindromo ou não.
 E exiba o resultado. : 
 A base do teto desaba. 
 A cara rajada da jararaca. 
 Acuda cadela da Leda caduca. 
 A dama admirou o rim da amada. 
 A Daniela ama a lei? Nada!
 Adias a data da saída. A diva em Argel alegra-me a vida. A droga do dote é todo da gorda. 

1) Converter em array
2) converter tudo em minuscula ou maiscula
2.1) remover espacos em branco 
3) novamente para string 
4) comparar o inverso <body> -->
<form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Digite a primeira palavra: <input type="text" name="palavra1">    <br><br>
        Digite a segunda palavra: <input type="text" name="palavra2">    <br><br>
        <input type="submit">
        </form>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $primeiraPalavra = strtolower($_POST['palavra1']);
        $segundaPalavra = strtolower($_POST['palavra2']);
        //conversão pra array
        $primeiraPalavra = str_split($primeiraPalavra);
        $segundaPalavra = str_split($segundaPalavra);
        echo $primeiraPalavra;
        str_replace($primeiraPalavra," ", "");
        echo $primeiraPalavra;

        $remove_Acento = function($palavra) {
            $aRemover = array('ç','Ç','é','É','á','Á','ã','Ã');
            $aPosicionar = array('c','C','e','E','a','A','a','A');
            return str_replace($aRemover, $aPosicionar, $palavra);
        };
    }
    ?>
</body>