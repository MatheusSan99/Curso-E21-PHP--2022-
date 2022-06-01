<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicios PHP</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </head>
    <body>
    <style type="text/css">
        body{
            background:#DCDCDC;
        }
        .titulo{  
            background:#C0C0C0; 
            font-size: 30px;
            font-weight: bold;
            color: red;
            margin-bottom: 5px;
            box-sizing: border-box;
            border: 1px hidden black;
            border-radius: 10px;
            padding: 8px 8px;
        }
        .box {
            display: flex;
            align-items: center;
            flex-flow: row wrap;
            justify-content: center;
        }
        .one {
            flex: 1 1 auto;
            font-size: 20px;
        }
        .arquivos{
            position: absolute;
            margin-bottom: 10px;
            color: black;
            text-decoration: none;
        }
        .arquivos:hover {
            font-size: 22px;
            color: darkred;
            transition: 5ms;
        }

    </style>
    <h1 align="center">Resolução dos Exercicios Propostos</h1> 
    </body>

<?php
$path = "./";
$diretorio = scandir($path);
echo '<div class="box">';
echo '<div class="titulo">Índice de arquivos das aulas</div>';
echo '</div>';
$x = 0;

echo '<div class="box" >';
foreach ($diretorio as $arquivo) {
    if ($x == 0) {
        echo '<div class="one">';
    }
    echo '<br><a class="arquivos" href="'  . $path . $arquivo . '">' . "    " . $arquivo . "    " . '</a>';
    $x++;
    if ($x > 8) {
        echo '</div>';
        $x = 0;
    }
}
echo "</div>";


?>

</html>