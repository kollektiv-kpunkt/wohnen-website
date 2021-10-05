var labelsChart1 = ['3-Zimmer 1999', '3-Zimmer 2020']

var dataChart1 = {
    labels: labelsChart1,
    datasets: [{
        label: "Monatsmiete 3-Zimmer Wohnung",
        backgroundColor: 'rgba(126, 0, 0, 0.5)',
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
                max: 3000,
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
        plugins: {
            legend: {
                display: false
            }
        }
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
            data: [100,101.27,111.38,112.58,103.64,101.93,106.32,117.95,139.98,130.3,155.1,152.17,156.72],
            tension: 0.3
        },
        {
            label: "PSP",
            backgroundColor: 'rgba(255, 0, 0, 0.5)',
            borderColor: 'rgba(255, 0, 0, 1)',
            data: [100,118.14,136.89,152.62,138.61,142.39,143.94,161.99,151.33,165.61,226.14,185.55,211.18],
            tension: 0.3
        },
        {
            label: "mobimo",
            backgroundColor: 'rgba(128, 0, 128, 0.5)',
            borderColor: 'rgba(128, 0, 128, 1)',
            data: [100,115.1,144.51,145.83,128.78,124.55,132.15,162.09,175.35,159.65,185.43,175.51,213.53],
            tension: 0.3
        },
    ]
}

var configChart3 = {
    type: 'line',
    data: dataChart3,
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

var chart3 = new Chart(
    document.getElementById('chart3'),
    configChart3
);

var labelsChart4 = ['2-Zimmer', '3-Zimmer', '4-Zimmer']

var dataChart4 = {
    labels: labelsChart4,
    datasets: [
        {
            label: "Gemeinnützig",
            backgroundColor: 'rgba(197, 30, 30, 0.5)',
            borderColor: 'rgba(197, 30, 30, 1)',
            data: [915,1016,1400]
        }, {
            label: "Renditeorientiert",
            backgroundColor: 'rgba(31, 31, 143, 0.5)',
            borderColor: 'rgba(31, 31, 143, 1)',
            data: [1341,1586,2000]
        }
    ]
}

var configChart4 = {
    type: 'bar',
    data: dataChart4,
    options: {
        aspectRatio: (3/2),
        scales: {
            y: {
                ticks: {
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return value + " CHF";
                    }
                }
            }
        }
    }
};

var chart1 = new Chart(
    document.getElementById('chart4'),
    configChart4
);