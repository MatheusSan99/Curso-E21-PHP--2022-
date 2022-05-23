<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nome: <input type="text" name="fname">
        <input type="submit">
    </form>
</body>

</html>
<?php echo $_SERVER['PHP_SELF'] . "<br>"; ?>
<?php echo $_SERVER['REQUEST_METHOD'] . "<br>"; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['fname'];
    if (empty($name)) {
        echo 'nome vazio';
    } else {
        echo $name;
    }
}
?>