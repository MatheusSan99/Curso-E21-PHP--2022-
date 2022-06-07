<!-- Subtraia o valores de num1 e num2.. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Exercício 12</title>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Numero1: <input type="number" step="any" required name="fnumero1" >
        Numero2: <input type="number" step="any" required name="fnumero2" >
        <input type="submit">
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['fnumero1'];
        $numero2 = $_POST['fnumero2'];
        if($numero && $numero2 != '')  {
        echo "<h3>O primeiro número foi: $numero</h3>";
        echo "<h3>O segundo número foi: $numero2</h3>";
        echo "$numero - $numero2 é igual a: " . $numero-$numero2;
    }
    else {
        echo "<h2>Você precisa digitar um número positivo!</h2>";
    }
    }
?>
