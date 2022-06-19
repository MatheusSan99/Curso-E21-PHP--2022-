<?php
session_start();

require_once 'ex028b.php';

if(!isset($_GET['apagar'])) {
   echo $_SESSION['cadastro']['Nome'];

    array_splice($_SESSION['cadastro'] , $_GET['apagar'], 1);

    header('Location: ex028b.php');
}
?>
