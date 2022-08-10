google.charts.load('current', {'packages':['corechart']});

function desenhaPizza(){
    var tabela = new google.visualization.DataTable();

    tabela.addColumn('string', 'Categorias');
    tabela.addColumn('number', 'Valores');

    tabela.addRows([
        ['Educação', 2000],
        ['Transporte', 500],
        ['Lazer', 230],
        ['Saúde', 50],
        ['Cartão de Crédito', 900],
        ['Alimentação', 260]
    ]);

    var grafico = new google.visualization.PieChart();
    grafico.draw(tabela);
    google.charts.setOnLoadCallback(tabela);
}
desenhaPizza();