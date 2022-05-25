<html>
<!-- Crie uma variavel nome e atribua a mesma um nome digitado pelo usuario -->

<body>
        <form method="post" action="
<?php echo $_SERVER['PHP_SELF']; ?>">
                Digite um Nome: <input type="text" name="fname">
                <input type="submit">
        </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['fname'];

echo $name;
}
?>