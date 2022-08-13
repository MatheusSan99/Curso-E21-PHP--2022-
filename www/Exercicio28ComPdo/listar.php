<?php
require_once 'bancoDeDados.php';
require_once 'html/listar.html';

$dataSearch = $pdo->query('SELECT * FROM formularios');
$cadastros = $dataSearch->fetchAll(PDO::FETCH_ASSOC);

echo "<a href='frontPage.php'><input class='btn ml-5 btn-outline-light btn-lg px-4 my-3' type='submit' name='listar' value='Voltar' formnovalidate/></a>";


foreach ($cadastros as $cadastro) {
    echo

    "<div class='card mb-3 card-body container'>
        <div class='d-flex flex-column flex-lg-row'>
            <div class='row flex-fill'>
                <div class='col-sm-5'>
                
                    <h4 class='h5'>{$cadastro['nome']}</h4>
                    
                    <span class='badge bg-secondary'>Idade: {$cadastro['idade']}</span>
                    <span class='badge bg-secondary'>Cep: {$cadastro['cep']}</span>
                    <span class='badge bg-secondary'>Saldo R$: {$cadastro['saldo']}</span>
                    
                    <a href='editar.php?editar={$cadastro['id']}' class='col-sm-3 text-lg-end' ><input type='submit' class='btn btn-primary stretched-link ' name='editar' value='Editar {$cadastro['nome']}'>
                    </a>   
                     
                </div>
            </div>
        </div>
    </div>
";
}
