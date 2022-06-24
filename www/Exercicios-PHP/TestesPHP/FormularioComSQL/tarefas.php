<?php

?>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="tarefas.css">
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

                    <label>Descrição (opcional)
                        <input type="text" name="descrição"></input>
                    </label>

                    <label>Prazo (opcional):
                        <input type="text" name="prazo">
                    </label>
                <legend>Prioridade:</legend>
                    <label>
                        <input type="radio" name="prioridade" value="baixa" checked>Baixa
                        <input type="radio" name="prioridade" value="media" >Média
                        <input type="radio" name="prioridade" value="alta" >Alta
                    </label>

                    <label>
                        <input type="checkbox" name="concluida" value="sim">Tarefa Concluída:
                    </label>
                <input type="submit" value="Cadastrar" />
            </fieldset>
        </form>
        <table>
            <tr>
                <th>Tarefas</th>
            </tr>

            <?php
                foreach($listaDeTarefas as $tarefa) : ?>
                    <tr>

                        <td><?php echo $tarefa['nome']; ?></td>
                        <td><?php echo $tarefa['descricao']; ?></td>
                        <td><?php echo $tarefa['prazo']; ?></td>
                        <td><?php echo $tarefa['prioridade']; ?></td>
                        <td><?php echo $tarefa['concluida']; ?></td>
                    </tr>
                <?php endforeach; ?>




        </table>
    </body>
</html>
