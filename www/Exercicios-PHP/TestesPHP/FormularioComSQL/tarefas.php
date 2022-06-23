<?php
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gerenciador de Tarefas</title>
    </head>
        <h1>Gerenciador de Tarefas</h1>
    <body>
        <form>
            <fieldset>
                <legend>Nova tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome" />
                </label>
                <input type="submit" value="Cadastrar" />
            </fieldset>
        </form>
        <table>
            <tr>
                <th>Tarefas</th>
            </tr>

        </table>
    </body>
</html>
<?php
$listaDeTarefas = [];
if (isset($_GET['nome'])) {
    $listaDeTarefas[] = $_GET['nome'];

}
?>