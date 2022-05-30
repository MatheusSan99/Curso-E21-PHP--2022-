<!-- Solicite os valores de num1 e num2. Some os valores das variaveis num1 e num2: sendo num1=52 e num2 = 106. por fim exiba o resultado. -->
<body>
<?php
$n1 = 52;
$n2 = 106;
if($_SERVER["REQUEST_METHOD"] == "GET") {
    if(empty($_GET['numero1'] || empty($_GET['numero2']))) {
        $n1 = 52;
        $n2 = 106;
    } else {
        $n1 = $_GET['numero1'];
        $n2 = $_GET['numero2'];
    }
}
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['numero1']) || empty($_POST['numero2'])) {
            $n1 = 52;
            $n2 = 106;
        }   else {
            $n1 = $_POST['numero1'];
            $n2 = $_POST['numero2'];  
        }
    }
?>
    <form method=""?>
        Numero1: <input type="number" name="numero1" step="any" value=<?php echo $n1?>>
        Numero2: <input type="number" name="numero2" step="any" value=<?php echo $n2?>>
        <input type="submit">
    </form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $resultado = $n1 + $n2;
    echo "<br> $n1 + $n2 = $resultado <br>";
}

if($_SERVER["REQUEST_METHOD"] == "GET") {
    $n1 = $_GET['numero1'];
    $n2 = $_GET['numero2'];
    $resultado = $n1 + $n2;
    echo "<br> $n1 + $n2 = $resultado <br>";
}
?>