const wid_win = $("body").width();
if (wid_win < 650) { $("#menu-desktop").remove(); $("#menu-mobile").removeAttr("id");  }
//  else { $("#menu-mobile").remove();  }
// alert(wid_win);

var ctx = document.getElementById("chart_activity");
var myChart = new Chart(ctx, {
    type: 'scatter',
    data: {
        datasets: [
            {
                label: 'Jan',
                data: [{ x: 1, y: 2 }, { x: 2, y: 4 }, { x: 3, y: 8 }, { x: 4, y: 16 }],
                showLine: true,
                fill: false,
                borderColor: 'rgba(0, 200, 0, 1)'
            },
            {
                label: 'Feb',
                data: [{ x: 1, y: 3 }, { x: 3, y: 4 }, { x: 4, y: 6 }, { x: 6, y: 9 }],
                showLine: true,
                fill: false,
                borderColor: 'rgba(200, 0, 0, 1)'
            }
        ]
    },
    options: {
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
    }
});

var ctx = document.getElementById('chart_material').getContext('2d');
var chart = new Chart(ctx, {
    type: 'horizontalBar', // <-- instead of 'bar'
    data: {
        labels: ['KRK', 'SM', 'BB'],
        datasets: [{
            label: 'REBUSE MATERIAL', 
            data: [1, 2, 3],
            fill: false,
            borderColor: '#36A2EB',
            backgroundColor: '#9BD0F5',
        }],
    },
    options: {
        responsive: true
    }
});