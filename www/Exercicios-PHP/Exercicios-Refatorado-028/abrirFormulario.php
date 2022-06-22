<?php
session_start();

require_once 'html/formulario.html';
require_once 'exibeCadastro.php';
require_once 'resetaCadastro.php';

    if (isset($_POST['adicionar'])) {

        $novoCadastro = ['Nome' => $_POST['nome'], 'Idade' => $_POST['idade'], 'Cep' => $_POST['cep'], 'Saldo' => $_POST['saldo']];

        $_SESSION['cadastros'][] = $novoCadastro;

    }

exibeCadastro($_SESSION['cadastros']);