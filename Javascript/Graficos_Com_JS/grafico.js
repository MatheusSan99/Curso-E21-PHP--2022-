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
    var opcoes = {
        title:'Tipos de Gastos',
        is3D:true,
        legend:'labeled',
        pieSliceText:'value',
        slices: {
           0:{color: '#4169E1'},
           1:{color: '#1E90FF'}, 
           2:{color: '#00BFFF'}, 
           3:{color: '#87CEFA'}, 
           4:{color: '#87CEEB'}, 
           5:{color: '#ADD8E6'} 
        }
    };

    var grafico = new google.visualization.PieChart(document.getElementById('graficoPizza'));
    grafico.draw(tabela,opcoes);
    
}
google.charts.setOnLoadCallback(desenhaPizza);