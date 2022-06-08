<style>
    <?php include '../css_form.css' ?>
</style>
<title>Ex GET</title>
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
        Número 1 = <input type="number" placeholder="n1" required name="n1" value=<?php echo $n1; ?>>
        Número 2 = <input type="number" placeholder="n2"required name="n2" value=<?php echo $n2; ?>>
        <input type="submit">
    </form>

</body>

</html>
<?php
$soma = $n1 + $n2;
echo 'A soma de ' . $n1 . ' e ' . $n2 . ' é = ' . $soma;
?>