<!-- Crie um programa que pede ao usuário um número qualquer, em seguida retorno se este número é contador ou não, caso não, retorne também quantas vezes esse número é divisível. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Ex 025</title>
    <form action="" method="post">
        <label for="numeroInput" class="label">Digite um número</label>
        <input class="input" type="text" name="numeroInput" id="numeroInput" placeholder="Verificarei se ele é primo..." onfocus="this.value=''">
        <input class="botao" type="submit" name="enviar">
    </form>

    <?php
    $contador=0;
        if (isset($_POST['enviar'])) {
            $numeroUsuario = $_POST['numeroInput'];

            for ($x = 1; $x < $numeroUsuario+1; $x++) {
                if ($numeroUsuario % $x == 0) {
                    $contador++;
                }
            }
            if($contador==2){
                echo '<p class="texto">Este número é primo</p>';
            }
            else{
                echo "<p class='texto'> Este número não é primo e pode ser dividido até $contador vezes</p>";
            }            
        }
    ?>