
let monthlyExpenses = [];


function updateChart() {
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'], 
            datasets: [{
                label: 'Gastos Mensais',
                data: monthlyExpenses, 
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}


document.getElementById('expenseForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const expenseAmount = parseFloat(document.getElementById('expenseAmount').value);
    if (!isNaN(expenseAmount)) {
        monthlyExpenses.push(expenseAmount);
        updateChart();
        document.getElementById('expenseForm').reset(); 
    } else {
        alert('Por favor, insira um número válido para os gastos.');
    }
});
