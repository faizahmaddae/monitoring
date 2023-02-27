<div class="d-block w-100">
    <h3>Share of Voice by Media</h3>
    <p>
        Share of Voice in Comparison to UNICEF's Peers/Comparative Organizations by Media Type During a Specific Period of Time (Broadcast Media refers to TV and radio)
    </p>
    <div class="row">
        <div class="col-12 col-md-12">
            <canvas id="barChart1"></canvas>
        </div>
    </div>

    <script>
        // First pie chart
        var ctxBar1 = document.getElementById('barChart1').getContext('2d');
        var labelsBar1 = ['UNICEF', 'Save the Children', 'UNOCHA', 'World Food Programme', 'WHO', 'UNAMA', 'RED CRESCENT', 'UNFPA'];
        var barChart1 = new Chart(ctxBar1, {
            type: 'bar',
            data: {
                labels: labelsBar1,
                datasets: [{
                    backgroundColor: 'blue',
                    data: [
                        41,
                        20,
                        9,
                        8,
                        8,
                        4,
                        3,
                        3,
                    ],
                    datalabels: {
                        align: 'end',
                        anchor: 'start'
                    }
                }, {
                    backgroundColor: 'yellow',
                    data: [
                        41,
                        20,
                        9,
                        8,
                        8,
                        4,
                        3,
                        3,
                    ],
                    datalabels: {
                        align: 'center',
                        anchor: 'center'
                    }
                }, {
                    backgroundColor: 'red',
                    data: [
                        41,
                        20,
                        9,
                        8,
                        8,
                        4,
                        3,
                        3,
                    ],
                    datalabels: {
                        anchor: 'end',
                        align: 'start',
                    }
                }]
            },
            options: {
                indexAxis: 'y',
                plugins: {
                    datalabels: {
                        color: 'white',
                        display: function(context) {
                            // return context.dataset.data[context.dataIndex] > 15;
                            return true;
                        },
                        font: {
                            weight: 'bold'
                        },
                        formatter: Math.round
                    },
                    legend: {
                        display: false
                    }
                },

                // Core options
                aspectRatio: 5 / 3,
                layout: {
                    padding: {
                        top: 24,
                        right: 16,
                        bottom: 0,
                        left: 8
                    }
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
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        });
    </script>
</div>