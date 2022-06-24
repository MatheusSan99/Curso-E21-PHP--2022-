<?php
session_start();

if (isset($_GET['nome']) && $_GET['nome'] != "") {
    $tarefas = [];

    $tarefas['nome'] = $_GET['nome'];
}

if (isset($_GET['descricao'])) {
    $tarefas['descricao'] = $_GET['descricao'];

} else {
    $tarefas['descricao'] = "";
}

if (isset($_GET['prazo'])) {
    $tarefas['prazo'] = $_GET['prazo'];
} else {
    $tarefas['prazo'] = "";
}
$tarefas['prioridade'] = $_GET['prioridade'];

if (isset($_GET['concluida'])) {
    $tarefas['concluida'] = $_GET['concluida'];

} else {
    $tarefas['concluida'] = "";
}
$_SESSION['listaDeTarefas'][] = $tarefas;

if (isset($_SESSION['listaDeTarefas'])) {
    $listaDeTarefas = $_SESSION['listaDeTarefas'];
} else {
    $listaDeTarefas = [];
}
include  'tarefas.php';


