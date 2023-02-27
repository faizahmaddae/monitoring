<div class="d-block w-100">
    <h3>Share of Voice by Media</h3>
    <p>
        Share of Voice in Comparison to UNICEF's Peers/Comparative Organizations by Media Type During a Specific Period of Time (Broadcast Media refers to TV and radio)
    </p>
    <div class="row">
        <div class="col-12 col-md-3">
            <canvas id="pieChart1"></canvas>
        </div>
        <div class="col-12 col-md-3">
            <canvas id="pieChart2"></canvas>
        </div>
        <div class="col-12 col-md-3">
            <canvas id="pieChart3"></canvas>
        </div>
        <div class="col-12 col-md-3">
            <!-- labels of chars -->
            <ul>
                <li>UNICEF</li>
                <li>Save the Children</li>
                <li>UNOCHA</li>
                <li>World Food Programme</li>
                <li>WHO</li>
                <li>UNAMA</li>
                <li>RED CRESCENT</li>
                <li>UNFPA</li>
                <li>UNCHR</li>
                <li>UN WOMEN</li>
                <li>WAR CHILD AFGHANISTAN</li>
            </ul>
        </div>
    </div>

    <script>
        // First pie chart
        var ctx1 = document.getElementById('pieChart1').getContext('2d');
        var labels1 = ['UNICEF', 'Save the Children', 'UNOCHA', 'World Food Programme', 'WHO', 'UNAMA', 'RED CRESCENT', 'UNFPA'];
        var pieChart1 = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: labels1,
                datasets: [{
                    backgroundColor: [
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                        'rgba(255, 206, 86)',
                        'rgba(75, 192, 192)',
                        'rgba(153, 102, 255)',
                        'rgba(255, 159, 64)',
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                       
                    ],
                    data: [41, 20, 9, 8, 8, 4, 3, 3],
                    datalabels: {
                        anchor: 'end',
                        align: 'end',
                    }
                }]
            },
            options: {
                plugins: {
                    datalabels: {
                        backgroundColor: function(context) {
                            // return context.dataset.backgroundColor;
                        },
                        // borderColor: 'white',
                        // borderRadius: 25,
                        // borderWidth: 2,
                        // color: 'white',
                        display: function(context) {
                            var dataset = context.dataset;
                            var count = dataset.data.length;
                            var value = dataset.data[context.dataIndex];
                            // return value > count * 1.5;
                            return value;
                        },
                        font: {
                            weight: 'bold'
                        },
                        padding: 0,
                        formatter: function(value) {
                            return value + '%';
                        }
                    },
                    legend: {
                        display: false,
                    }
                },

                // Core options
                aspectRatio: 4 / 5,
                cutoutPercentage: 32,
                layout: {
                    padding: 32
                },
                elements: {
                    line: {
                        fill: false
                    },
                    point: {
                        hoverRadius: 7,
                        radius: 5
                    }
                },
            }
        });



        // Second pie chart
        var ctx2 = document.getElementById('pieChart2').getContext('2d');
        var labels2 = ['UNICEF', 'Save the Children', 'UNOCHA', 'World Food Programme', 'WHO', 'UNAMA', 'RED CRESCENT', 'UNFPA'];
        var pieChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: labels2,
                datasets: [{
                    backgroundColor: [
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                        'rgba(255, 206, 86)',
                        'rgba(75, 192, 192)',
                        'rgba(153, 102, 255)',
                        'rgba(255, 159, 64)',
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                    ],
                    data: [41, 20, 9, 8, 8, 4, 3, 3],
                    datalabels: {
                        anchor: 'end',
                        align: 'end',
                    }
                }]
            },
            options: {
                plugins: {
                    datalabels: {
                        backgroundColor: function(context) {
                            // return context.dataset.backgroundColor;
                        },
                        // borderColor: 'white',
                        // borderRadius: 25,
                        // borderWidth: 2,
                        // color: 'white',
                        display: function(context) {
                            var dataset = context.dataset;
                            var count = dataset.data.length;
                            var value = dataset.data[context.dataIndex];
                            // return value > count * 1.5;
                            return value;
                        },
                        font: {
                            weight: 'bold'
                        },
                        padding: 0,
                        formatter: function(value) {
                            return value + '%';
                        }
                    },
                    legend: {
                        display: false,
                    }
                },

                // Core options
                aspectRatio: 4 / 5,
                cutoutPercentage: 32,
                layout: {
                    padding: 32
                },
                elements: {
                    line: {
                        fill: false
                    },
                    point: {
                        hoverRadius: 7,
                        radius: 5
                    }
                },
            }
        });

        // Third pie chart
        var ctx3 = document.getElementById('pieChart3').getContext('2d');
        var labels3 = ['UNICEF', 'Save the Children', 'UNOCHA', 'World Food Programme', 'WHO', 'UNAMA', 'RED CRESCENT', 'UNFPA'];
        var pieChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: labels3,
                datasets: [{
                    backgroundColor: [
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                        'rgba(255, 206, 86)',
                        'rgba(75, 192, 192)',
                        'rgba(153, 102, 255)',
                        'rgba(255, 159, 64)',
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                        
                    ],
                    data: [41, 20, 9, 8, 8, 4, 3, 3],
                    datalabels: {
                        anchor: 'end',
                        align: 'end',
                    }
                }]
            },
            options: {
                plugins: {
                    datalabels: {
                        backgroundColor: function(context) {
                            // return context.dataset.backgroundColor;
                        },
                        // borderColor: 'white',
                        // borderRadius: 25,
                        // borderWidth: 2,
                        // color: 'white',
                        display: function(context) {
                            var dataset = context.dataset;
                            var count = dataset.data.length;
                            var value = dataset.data[context.dataIndex];
                            // return value > count * 1.5;
                            return value;
                        },
                        font: {
                            weight: 'bold'
                        },
                        padding: 0,
                        formatter: function(value) {
                            return value + '%';
                        }
                    },
                    legend: {
                        display: false,
                    }
                },

                // Core options
                aspectRatio: 4 / 5,
                cutoutPercentage: 32,
                layout: {
                    padding: 32
                },
                elements: {
                    line: {
                        fill: false
                    },
                    point: {
                        hoverRadius: 7,
                        radius: 5
                    }
                },
            }
        });

        window.addEventListener('beforeprint', () => {
            pieChart1.resize(600, 600);
            pieChart2.resize(600, 600);
            pieChart3.resize(600, 600);
        });
        window.addEventListener('afterprint', () => {
            pieChart1.resize(600, 600);
            pieChart2.resize(600, 600);
            pieChart3.resize(600, 600);

        });
    </script>
</div>