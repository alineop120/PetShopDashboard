// Dados fictícios para os gráficos
const clientesData = {
    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
    datasets: [{
        label: 'Número de Clientes',
        data: [50, 70, 90, 80, 100, 120],
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
    }]
};

const petsData = {
    labels: ['Cachorros', 'Gatos', 'Pássaros', 'Peixes', 'Outros'],
    datasets: [{
        label: 'Número de Pets Cadastrados',
        data: [150, 100, 50, 30, 20],
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
    }]
};

// Criação dos gráficos
const ctxClientes = document.getElementById('client-chart').getContext('2d');
const clientChart = new Chart(ctxClientes, {
    type: 'bar',
    data: clientesData
});

const ctxPets = document.getElementById('pet-chart').getContext('2d');
const petChart = new Chart(ctxPets, {
    type: 'bar',
    data: petsData
});
