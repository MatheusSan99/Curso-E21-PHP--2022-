<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11e</title>
</head>

<body>
    <?php
    if (isset($_GET["n1"])) {
        $n1 = $_GET["n1"];
    } else {
        $n1 = 52;
    }
    if (isset($_GET["n2"])) {
        $n2 = $_GET["n2"];
    } else {
        $n2 = 106;
    }
    ?>
    <form>
        Número 1 = <input type="number" required name="n1" value=<?php echo $n1; ?>>
        Número 2 = <input type="number" required name="n2" value=<?php echo $n2; ?>>
        <input type="submit">
    </form>

</body>

</html>
<?php
$soma = $n1 + $n2;
echo 'A soma de ' . $n1 . ' e ' . $n2 . ' é = ' . $soma;
?>