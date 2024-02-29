document.addEventListener('DOMContentLoaded', function () {
    var salesChartCanvas = document.getElementById('salesChart');
    var salesChartData = {
        labels: JSON.parse(salesChartCanvas.getAttribute('data-labels')),
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

    var salesChartCtx = salesChartCanvas.getContext('2d');
    var salesChart = new Chart(salesChartCtx, {
        type: 'bar',
        data: salesChartData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var profitLossChartCanvas = document.getElementById('profitLossChart');
    var profitLossChartData = {
        labels: JSON.parse(profitLossChartCanvas.getAttribute('data-labels')),
        datasets: [
            {
                label: 'Pemasukan',
                data: [500, 600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 1600],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'Pengeluaran',
                data: [200, 150, 180, 250, 300, 280, 320, 350, 380, 400, 420, 450],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }
        ]
    };

    var profitLossChartCtx = profitLossChartCanvas.getContext('2d');
    var profitLossChart = new Chart(profitLossChartCtx, {
        type: 'bar',
        data: profitLossChartData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
