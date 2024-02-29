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

// Function to open the print modal
function printReport() {
    document.getElementById('printModal').style.display = 'block';
}

// Function to close the modal
function closeModal() {
    document.getElementById('printModal').style.display = 'none';
}

// Add event listeners for closing the modal
document.querySelector('.close').addEventListener('click', closeModal);
window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('printModal')) {
        closeModal();
    }
});

// Handle printing options
document.getElementById("printTableBtn").addEventListener('click', function () {
    printTable(); // Print by table
    closeModal();
});

document.getElementById("printChartBtn").addEventListener('click', function () {
    printChart(); // Print by chart diagram
    closeModal();
});

// funtion to print the chart data
function printChart() {
    var chartTitle = document.querySelector('.chart h2').innerText;
    var salesChartCanvas = document.getElementById('salesChart');
    var salesChartImage = salesChartCanvas.toDataURL("image/png");
    var styles = getStyles(); // Get all stylesheets and style tags from the current page

    var content = '<h2>' + chartTitle + '</h2><img src="' + salesChartImage + '" style="width:100%">';

    var newWindow = window.open('', '_blank'); // Open a new window
    newWindow.document.write('<html><head><title>Chart Print</title>'); // Write the HTML content to the new window

    // Write the styles to the new window
    styles.forEach(function(style) {
        newWindow.document.write(style.outerHTML);
    });

    newWindow.document.write('</head><body>'); 
    newWindow.document.write(content);
    newWindow.document.write('</body></html>');
    newWindow.document.close();
    setTimeout(function() {
        newWindow.print(); // Print the current page after a short delay to allow the modal to close
    }, 500); // Adjust the delay as needed
        // Close the window after printing is done
        newWindow.addEventListener('afterprint', function() {
            newWindow.close();
        });
}

function getStyles() {
    var styles = [];
    // Get all external stylesheets
    var externalStylesheets = document.querySelectorAll('link[rel="stylesheet"]');
    externalStylesheets.forEach(function(stylesheet) {
        var href = stylesheet.getAttribute('href');
        if (href) {
            var newStylesheet = document.createElement('link');
            newStylesheet.rel = 'stylesheet';
            newStylesheet.href = href;
            styles.push(newStylesheet);
        }
    });

    // Get all inline styles
    var inlineStyles = document.querySelectorAll('style');
    inlineStyles.forEach(function(style) {
        styles.push(style);
    });

    return styles;
}






// Function to print by table
function printTable() {
    closeModal(); // Close the modal before printing
    setTimeout(function() {
        window.print(); // Print the current page after a short delay to allow the modal to close
    }, 500); // Adjust the delay as needed
}





document.addEventListener('DOMContentLoaded', function () {
    updateChart(chartData);

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
