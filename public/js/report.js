// chartScript.js

function printReport() {
    window.print();
}

var chartCanvas = document.getElementById('salesChart');

// Sample data for illustration purposes
var defaultChartData = {
    labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'],
    datasets: [
        {
            label: 'Penjualan Bulan Kemarin',
            data: [124, 153, 125, 111, 163],
            backgroundColor: 'rgba(196, 46, 29, 0.2)',
            borderColor: 'rgba(196, 46, 29, 1)',
            borderWidth: 1
        },
        {
            label: 'Penjualan Bulan Ini',
            data: [123, 162, 132, 123, 107],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
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
