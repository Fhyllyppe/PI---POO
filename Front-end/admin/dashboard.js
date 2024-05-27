document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost/PI---POO/get_dashboard_data.php')
    .then(response => response.json())
    .then(data => {
        // Atualizar os cards com os dados recebidos
        document.getElementById('locados').innerText = data.locados;
        document.getElementById('receber').innerText = `R$ ${data.a_receber}`;
        document.getElementById('pagar').innerText = `R$ ${data.a_pagar}`;

        // Criar gráficos com Chart.js
        const statusLocacaoChart = new Chart(document.getElementById('statusLocacaoChart'), {
            type: 'pie',
            data: {
                labels: ['Reservadas', 'Devolvidas', 'Canceladas', 'Locadas'],
                datasets: [{
                    label: 'Status Locação',
                    data: [data.status_locacao.reservadas, data.status_locacao.devolvidas, data.status_locacao.canceladas, data.status_locacao.locadas],
                    backgroundColor: ['#FFCE56', '#36A2EB', '#FF6384', '#4BC0C0']
                }]
            }
        });

        const recebidoPagoChart = new Chart(document.getElementById('recebidoPagoChart'), {
            type: 'pie',
            data: {
                labels: ['Recebido', 'Pago'],
                datasets: [{
                    label: 'Recebido X Pago',
                    data: [data.recebido, data.pago],
                    backgroundColor: ['#4BC0C0', '#FF6384']
                }]
            }
        });

        const receitasChart = new Chart(document.getElementById('receitasChart'), {
            type: 'bar',
            data: {
                labels: data.receitas.labels,
                datasets: [{
                    label: 'Receitas',
                    data: data.receitas.data,
                    backgroundColor: '#36A2EB'
                }]
            }
        });

        const despesasChart = new Chart(document.getElementById('despesasChart'), {
            type: 'bar',
            data: {
                labels: data.despesas.labels,
                datasets: [{
                    label: 'Despesas',
                    data: data.despesas.data,
                    backgroundColor: '#FF6384'
                }]
            }
        });
    })
    .catch(error => console.error('Erro:', error));
});
