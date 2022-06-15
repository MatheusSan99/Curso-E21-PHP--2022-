<?php
session_start();

if(!isset($_GET['apagar'])) {
    array_splice($_SESSION['cadastro'] , $_GET['apagar'], 1);

    header("refresh: 1 ;ex028b.php");
}
?>
