<!-- Crie uma lista com 5 elementos atravez de 5 forms diferentes. (ao preencher informe um deles como Carlos).
Substitua o terceiro item de da lista nomes.
Adicione um elemento na lista nomes.
Adicione um elemento na segunda posição da lista nomes.
Remova o elemento Carlos da lista nomes.
Mostre o segundo, terceiro, quarto elemento da lista nomes. Mostre o ultimo elemento da lista. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 22</title>
    <body>
        <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Digite o 1° nome: <input type="text" name="nome1">    <br><br>
        Digite o 2° nome: <input type="text" name="nome2">    <br><br>
        Digite o 3° nome: <input type="text" name="nome3">    <br><br>
        Digite o 4° nome: <input type="text" name="nome4">    <br><br>
        Digite o 5° nome: <input type="text" name="nome5">    <br><br>
        <input type="submit">   
        </form>
    </body>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome1 = $_POST['nome1'];
        $nome2 = $_POST['nome2'];
        $nome3 = $_POST['nome3'];
        $nome4 = $_POST['nome4'];
        $nome5 = $_POST['nome5'];
        $lista_array = array($nome1,$nome2,$nome3,$nome4,$nome5);

        function listaArray($array) {
            foreach($array as $indice => $nome) {
                echo '' . ' Nome: ' . '';
                print   $array[$indice] ;
                echo ' | |';
            }
        }
            listaArray($lista_array);
            $lista_array[2] = 'Debora';
            echo '<br><br>O Terceiro elemento foi substituido. Agora o terceiro elemento da lista é: ' . $lista_array[2] . '<br><br>';

            listaArray($lista_array);

            array_push($lista_array, 'Bruno'); echo '<br><br>';
            echo 'Adicionei um elemento no array!<br><br>';
            listaArray($lista_array); echo '<br>';
            array_splice($lista_array, 2, 0, 'Jose');
            echo '<br>Adicionei um elemento na segunda posição do array. Agora o segundo elemento é: ' . $lista_array[2] .'<br><br>';
           listaArray($lista_array); echo '<br><br>';

            echo "Agora se 'Carlos' estiver no array irei remove-lo... <br>";
           $procuraCarlos = array_search('Carlos' , $lista_array);
           if ($procuraCarlos != false) {
               unset($lista_array[$procuraCarlos]);
           }
           listaArray($lista_array); echo '<br><br>';

           echo 'O segundo elemento do Array é: ' . $lista_array[2] . '<br>O Terceiro elemento é: ' . $lista_array[3] . '<br>O Quarto elemento é: ' . $lista_array[4] . '<br> E o Último elemento é: ' . end($lista_array)  ;
    }


?>