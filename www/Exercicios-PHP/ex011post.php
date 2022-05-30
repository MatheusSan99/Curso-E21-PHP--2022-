<!-- Subtraia o valores de num1 e num2.. -->
<html>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Numero1: <input type="number" name="fnumero1" >
        Numero2: <input type="number" name="fnumero2" >
        <input type="submit">
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['fnumero1'];
        $numero2 = $_POST['fnumero2']; 
        $soma = $numero + $numero2;
        echo 'A soma de ' . $numero . ' e ' . $numero2 . ' é = ' . $soma; 
    }
?>
