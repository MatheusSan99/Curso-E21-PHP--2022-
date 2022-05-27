<!-- Solicite os valores de num1 e num2. Some os valores das variaveis num1 e num2: sendo num1=52 e num2 = 106. por fim exiba o resultado. -->
<html>
<?php
 

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['numero1']) || empty($_POST['numero2'])) {
            $n1 = 52;
            $n2 = 106;
            echo $n1 + $n2;
        }   else {
            $n1 = $_POST['numero1'];
            $n2 = $_POST['numero2'];

            
        }
    }
?>

<body>

    <form method="post"?>
        Numero1: <input type="number" name="numero1" value=<?php echo $n1?>>
        Numero2: <input type="number" name="numero2" value=<?php echo $n2?>>
        <input type="submit">
    </form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $resultado = $n1+$n2;
    echo $n1 + $n2 = $resultado;


}
?>




</html>
