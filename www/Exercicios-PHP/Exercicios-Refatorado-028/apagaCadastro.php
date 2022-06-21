<?php
session_start();
require_once 'bancoDeDados.php';

if($_GET['excluir']) {

    $nomeCadastro = $_GET['excluir'];

    $indiceASerExcluido = array_search($_GET['excluir'],array_column($_SESSION['cadastros'], 'Nome'));

    echo "Apagando o Cadastro $nomeCadastro";

    array_splice($_SESSION['cadastros'], ($indiceASerExcluido), 1);
}
//    header('Location: adicionaCadastro.php');
    header("refresh: 1; adicionaCadastro.php");
