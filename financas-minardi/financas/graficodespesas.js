let grafico;

function atualizarGrafico1() {
    // Obtemos as quantidades a serem adicionadas do formulário
    const alimentacaoAdicionar = parseFloat(document.getElementById('alimentacao').value) || 0;
    const transporteAdicionar = parseFloat(document.getElementById('transporte').value) || 0;
    const lazerAdicionar = parseFloat(document.getElementById('lazer').value) || 0;
    const outrosAdicionar = parseFloat(document.getElementById('outros').value) || 0;

    // Adicionamos os valores aos dados existentes do gráfico
    grafico.data.datasets[0].data[0] += alimentacaoAdicionar;
    grafico.data.datasets[0].data[1] += transporteAdicionar;
    grafico.data.datasets[0].data[2] += lazerAdicionar;
    grafico.data.datasets[0].data[3] += outrosAdicionar;

    // Atualizamos o gráfico
    grafico.update();

    // Limpa os campos do formulário
    document.getElementById('alimentacao').value = '';
    document.getElementById('transporte').value = '';
    document.getElementById('lazer').value = '';
    document.getElementById('outros').value = '';
}

function zerarGrafico() {
    const isEmpty = (str) => !str.trim();

    const alimentacaoValue = document.getElementById('alimentacao').value;
    const transporteValue = document.getElementById('transporte').value;
    const lazerValue = document.getElementById('lazer').value;
    const outrosValue = document.getElementById('outros').value;

    if (isEmpty(alimentacaoValue) && isEmpty(transporteValue) && isEmpty(lazerValue) && isEmpty(outrosValue)) {
        grafico.data.datasets[0].data = [0, 0, 0, 0];
        grafico.update();
    }
}

const dadosIniciais = [0, 0, 0, 0];

const dados = {
    labels: ['Alimentação', 'Transporte', 'Lazer', 'Outros'],
    datasets: [{
        label: 'Total Gasto',
        data: dadosIniciais,
        backgroundColor: [
            'rgba(54, 162, 235, 0.5)',
            'rgba(255, 99, 132, 0.5)',
            'rgba(255, 206, 86, 0.5)',
            'rgba(75, 192, 192, 0.5)'
        ],
        borderColor: [
            'rgba(54, 162, 235, 1)',
            'rgba(255, 99, 132, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
    }]
};

const config = {
    type: 'bar',
    data: dados,
    options: {
        scales: {
            y: {
                beginAtZero: true,
                suggestedMin: 0, // Define o valor mínimo do eixo y
                suggestedMax: 60 // Define o valor máximo do eixo y (ajuste conforme necessário)
            }
        }
    }
};

const ctx = document.getElementById('grafico').getContext('2d');
grafico = new Chart(ctx, config);
