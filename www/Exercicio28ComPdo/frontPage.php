<?php
require_once 'html/index.html';
require_once 'bancoDeDados.php';
require_once 'adicionarCadastro.php';

if (isset($_POST['listar'])) {
    header("location: listar.php");
}