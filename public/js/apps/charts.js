var labelsChart1 = ['1999', '2020']

var dataChart1 = {
    labels: labelsChart1,
    datasets: [{
        label: "Monatsmiete 3-Zimmer Wohnung",
        backgroundColor: 'rgba(126, 0, 0, 0.5)',
        borderColor: 'rgb(126, 0, 0)',
        data: [1338, 2473]
    }]
}

var configChart1 = {
    type: 'bar',
    data: dataChart1,
    options: {
        aspectRatio: (3/2),
        scales: {
            y: {
                min: 0,
                max: 2500,
                ticks: {
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return value + " CHF";
                    }
                }
            }
        },
        plugins: {
            legend: {
                display: false
            }
        }
    }
};

var chart1 = new Chart(
    document.getElementById('chart1'),
    configChart1
);



var labelsChart2 = [
    '2010',
    '2011',
    '2012',
    '2013',
    '2014',
    '2015',
    '2016',
    '2017',
    '2018',
    '2019',
    '2020'
]

var dataChart2 = {
    labels: labelsChart2,
    datasets: [
        {
            label: "Im Besitz von Immobilienkonzernen (%)",
            backgroundColor: 'rgba(31, 31, 143, 0.5)',
            borderColor: 'rgba(31, 31, 143, 1)',
            data: [25.5275387, 25.8293048, 26.54325356, 27.24225074, 27.68740979, 27.97846435, 29.15980905, 30.18146313, 30.79354088, 31.11307763, 31.78435169]
        },
        {
            label: "Im Besitz der öffentlichen Hand (%)",
            backgroundColor: 'rgba(197, 30, 30, 0.5)',
            borderColor: 'rgba(197, 30, 30, 1)',
            data: [25.14837401, 25.12466985, 25.04399187, 25.09977992, 24.83142052, 24.88615362, 24.49238463, 24.49684813, 24.53283265, 24.86659975, 24.83818947]
        },
    ]
}

var configChart2 = {
    type: 'line',
    data: dataChart2,
    options: {
        aspectRatio: (3/2),
        scales: {
            y: {
                ticks: {
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return value + "%";
                    }
                }
            }
        },
    }
};

var chart2 = new Chart(
    document.getElementById('chart2'),
    configChart2
);





// var labelsChart3 = [
//     '2010',
//     '2011',
//     '2012',
//     '2013',
//     '2014',
//     '2015',
//     '2016',
//     '2017',
//     '2018',
//     '2019',
//     '2020',
//     '2021'
// ]

// var dataChart3 = {
//     labels: labelsChart3,
//     datasets: [
//         {
//             label: "Allreal",
//             backgroundColor: 'rgba(31, 31, 143, 0.5)',
//             borderColor: 'rgba(31, 31, 143, 1)',
//             data: [100,109.99,111.17,102.75,100.66,104.99,116.47,138.22,128.67,153.15,150.26,154.76],
//             tension: 0.3
//         },
//         {
//             label: "PSP",
//             backgroundColor: 'rgba(255, 0, 0, 0.5)',
//             borderColor: 'rgba(255, 0, 0, 1)',
//             data: [100,115.87,129.18,117.32,120.52,121.83,137.12,128.09,140.17,191.41,157.06,178.75],
//             tension: 0.3
//         },
//         {
//             label: "SPS",
//             backgroundColor: 'rgba(128, 0, 128, 0.5)',
//             borderColor: 'rgba(128, 0, 128, 1)',
//             data: [null,null,null,null,null,100,114.04,114.44,117.8,131.06,108.08,130.13],
//             tension: 0.3
//         },
//         {
//             label: "mobimo",
//             backgroundColor: 'rgba(0, 128, 0, 0.5)',
//             borderColor: 'rgba(0, 128, 0, 1)',
//             data: [100,125.55,126.7,111.88,108.21,114.81,140.83,152.35,138.71,161.11,152.49,185.51],
//             tension: 0.3
//         },
//     ]
// }

var labelsChart3 = [
    '2005',
    '2006',
    '2007',
    '2008',
    '2009',
    '2010',
    '2011',
    '2012',
    '2013',
    '2014',
    '2015',
    '2016',
    '2017',
    '2018',
    '2019',
    '2020',
    '2021'
]

var dataChart3 = {
    labels: labelsChart3,
    datasets: [
        {
            label: "Allreal",
            backgroundColor: 'rgba(31, 31, 143, 0.5)',
            borderColor: 'rgba(31, 31, 143, 1)',
            data: [100,109.75,116.95,109.84,110.7,112.1,123.3,124.63,114.73,112.84,117.7,130.57,154.95,144.25,171.69,168.45,173.49],
            tension: 0.3
        },
        {
            label: "PSP",
            backgroundColor: 'rgba(255, 0, 0, 0.5)',
            borderColor: 'rgba(255, 0, 0, 1)',
            data: [100,113.29,115.41,118.51,103.01,121.7,141.01,157.22,142.78,146.68,148.27,166.87,155.89,170.59,232.95,191.14,217.54],
            tension: 0.3
        },
        {
            label: "mobimo",
            backgroundColor: 'rgba(128, 0, 128, 0.5)',
            borderColor: 'rgba(128, 0, 128, 1)',
            data: [100,100.76,99.3,95.25,82.57,95.04,119.32,120.41,106.33,102.84,109.12,133.84,144.79,131.82,153.11,144.92,176.31],
            tension: 0.3
        },
    ]
}

var configChart3 = {
    type: 'line',
    data: dataChart3,
    options: {
        aspectRatio: (4/3),
        scales: {
            y: {
                ticks: {
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return value + "%";
                    }
                }
            }
        },
    }
};

var chart3 = new Chart(
    document.getElementById('chart3'),
    configChart3
);