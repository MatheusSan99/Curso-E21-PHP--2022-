<!-- Crie uma variavel nome e atribua a mesma um nome digitado pelo usuario -->
<style>
        <?php include '../css_form.css' ?>
</style>
<title>Exercício 5</title>

<body>
        <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                <label class="label" for="campo">Digite um Nome:</label>
                <input class="input" type="text" id="campo" name="nome" placeholder="Digite um nome qualquer">
                <input class="botao" type="submit">
        </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['nome'];
        echo "<p class='texto'>$name</p>";
}
?>