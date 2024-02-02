var chartCanvas = document.getElementById('salesChart');
var chartData = {
    labels: JSON.parse(chartCanvas.getAttribute('data-labels')),
    datasets: [
        {
            label: 'Stok Masuk',
            data: [150, 250, 600, 200, 250, 700, 800, 900, 200, 300, 150, 200],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        },
        {
            label: 'Stok Keluar',
            data: [123, 163, 423, 132, 134, 312, 521, 731, 123, 114, 124, 163],
            backgroundColor: 'rgba(196, 46, 29, 0.2)',
            borderColor: 'rgba(196, 46, 29, 1)',
            borderWidth: 1
        }
    ]
};

document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
