<<<<<<< HEAD
<!-- Solicite os valores de num1 e num2. Some os valores das variaveis num1 e num2: sendo num1=52 e num2 = 106. por fim exiba o resultado. -->
<html>
<?php
$n1 = 52;
$n2 = 106;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['numero1']) || empty($_POST['numero2'])) {
        $n1 = 52;
        $n2 = 106;
        echo '';
    } else {
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];
        echo  $n1 . ' + ' . $n2 . ' = ' . $n1 + $n2;
    }
}
?>
=======
<!--
    11. Solicite os valores de num1 e num2. 
    Some os valores das variaveis num1 e num2: 
    sendo num1=52 e num2 = 106. por fim exiba o resultado.
    11.b pegar os dados de num1 e num2 de um form. (preservando)
    11.c pegar os dados de num1 e num2 passados pela url. -->
<style>
    <?php include '../css_form.css' ?>
</style>
<title>Ex 11</title>
>>>>>>> ae804c89b5d0946f0af9215db52657da8ffda605

<body>
    <?php

    echo "<br>O MÉTODO USADO FOI: " . ($_SERVER["REQUEST_METHOD"]) . "<br>";

    $num1 = 52;
    $num2 = 106;

    if (isset($_GET['num1'])) {
        $num1 = ($_GET['num1']);
    }
    if (isset($_GET['num2'])) {
        $num2 = ($_GET['num2']);
    }

<<<<<<< HEAD
    <form method="post" ?>">
        Numero1: <input type="number" name="numero1" value=<?php echo $n1 ?>>
        Numero2: <input type="number" name="numero2" value=<?php echo $n2 ?>>
=======
    if (isset($_POST["numero1"])) {
        $num1 = $_POST["numero1"];
    }
    if (isset($_POST["numero2"])) {
        $num2 = $_POST["numero2"];
    }
    ?>
    <form method="post">
        Número - 1: <input type="number" name="numero1" value="<?php echo $num1 ?>"/>
        Número - 2: <input type="number" name="numero2" value="<?php echo $num2 ?>" />
>>>>>>> ae804c89b5d0946f0af9215db52657da8ffda605
        <input type="submit">
    </form>
</body>

<<<<<<< HEAD
</html>
=======
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $resultado = $num1 + $num2;
    echo "<br> $num1 + $num2 = $resultado <br>";
}

?>
>>>>>>> ae804c89b5d0946f0af9215db52657da8ffda605
