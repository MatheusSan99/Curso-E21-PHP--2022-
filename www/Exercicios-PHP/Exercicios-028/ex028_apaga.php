<?php
session_start();
if($_GET['delete']) {
    array_splice($_SESSION['cadastro'] , $_GET['delete'], 1);
    header('Location: /ex028b.php');
}
?>
