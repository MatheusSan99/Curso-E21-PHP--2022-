<?php
session_start();

if(!isset($_GET['apagar'])) {
    array_splice($_SESSION['cadastro'] , $_GET['apagar'], 1);

    header('Location: ex028b.php');
}
?>
