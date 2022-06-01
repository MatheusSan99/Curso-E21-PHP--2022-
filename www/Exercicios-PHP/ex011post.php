<body>
    <?php 
    if (isset($_POST["n1"])) {
        $n1 = $_POST["n1"];      
        } else {
            $n1 = 52;
        }
        if (isset($_POST["n2"])) {
            $n2 = $_POST["n2"];
        } else {
            $n2 = 106;
        }
        ?>
    <form method="post">
        Numero1: <input type="number" name="n1" <?php echo $n1?>>
        Numero2: <input type="number" name="n2" <?php echo $n2?>>
        <input type="submit">
        <?php echo $_SERVER["REQUEST_METHOD"]?>
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $soma = $n1 + $n2;
        echo 'A soma de ' . $n1 . ' e ' . $n2 . ' é = ' . $soma; 
    }
?>