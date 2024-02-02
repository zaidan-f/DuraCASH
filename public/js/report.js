// chartScript.js

function printReport() {
    window.print();
}

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

// Sample data for illustration purposes
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

var ctx = chartCanvas.getContext('2d');
var salesChart;

document.addEventListener('DOMContentLoaded', function () {
    updateChart(defaultChartData);

    // Add an event listener to the date inputs
    document.getElementById('startDate').addEventListener('change', handleDateChange);
    document.getElementById('endDate').addEventListener('change', handleDateChange);
});

document.addEventListener('DOMContentLoaded', function () {
    // Set the default start date to the first day of the current month
    var currentDate = new Date();
    var firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    
    // Format the first day of the month as 'YYYY-MM-DD'
    var formattedFirstDay = formatDate(firstDayOfMonth);
    
    document.getElementById('startDate').value = formattedFirstDay;

    // Add an event listener to the date inputs
    document.getElementById('startDate').addEventListener('change', handleDateChange);
    document.getElementById('endDate').addEventListener('change', handleDateChange);

    // Call handleDateChange initially to trigger any necessary actions
    handleDateChange();
});

function formatDate(date) {
    var dd = String(date.getDate()).padStart(2, '0');
    var mm = String(date.getMonth() + 1).padStart(2, '0'); // January is 0!
    var yyyy = date.getFullYear();

    return yyyy + '-' + mm + '-' + dd;
}

function handleDateChange() {
    // Retrieve end date
    var endDate = document.getElementById('endDate').value;

    // Your logic to fetch updated data from the server based on the selected date range
    // Update the chart with the new data

    // For now, let's just alert a message
    // alert('Updating chart based on the selected date range.');
}







function updateChart(newChartData) {
    if (salesChart) {
        // If the chart exists, destroy it before updating
        salesChart.destroy();
    }

    salesChart = new Chart(ctx, {
        type: 'bar',
        data: newChartData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}
