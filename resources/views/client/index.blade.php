@extends('layouts.clientApp')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            hello sidebar
        </div>

        <div class="col-12 col-md-9 grey-bg px-5 py-3">
            <h3 class="fs-1 barnd-color pt-3">Share Of Voice in All Media</h3>

            <div class="row">

                <div class="col-md-10">
                    <div class="chart-container" style="position: relative; height:70vh; width70vw">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>

                <div class="col-md-2">
                    hello
                </div>
            </div>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<script>
    Chart.register(ChartDataLabels);
    const ctx = document.getElementById('myChart');

    // var svgIcon = new Image();
    // svgIcon.src = "{{ asset('svg/icon.svg') }}";
    // svgIcon.style.fill = '#FE777B';

    new Chart(ctx, {
        responsive: true,
        // maintainAspectRatio: false, 
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'faiz'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3, 20],
                borderWidth: 1,
                borderWidth: 1,
                datalabels: {
                    color: '#000',
                    anchor: 'end',
                    align: 'end',
                    offset: 10,
                    font: {
                        size: 12,
                        weight: 'bold',
                    },
                    formatter: function(value, context) {
                        return `${value}%`;
                    }
                },

            }],
        },

        options: {
            responsive: true,
            aspectRatio: 1,
            scales: {
                y: {
                    beginAtZero: true,
                    display: false,
                    ticks: {
                        display: false
                    },
                    grid: {
                        display: false
                    }
                },
                x: {
                    beginAtZero: true,
                    display: false,
                    ticks: {
                        display: false
                    },
                    grid: {
                        display: false
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'right',
                    align: 'center',
                    labels: {
                        usePointStyle: true,
                        // rectRounded, rectRot, triangle
                        pointBackgroundColor: "rgba(0,191,255)",
                        pointStyle: 'rectRounded',
                        padding: 30,
                        color: '#000',
                        font: {
                            size: 12
                        },
                    },
                },
            },
        }
    });

    window.addEventListener('beforeprint', () => {
        myChart.resize(600, 600);
    });
    window.addEventListener('afterprint', () => {
        myChart.resize();
    });
</script>

<!-- /.content -->
@endsection