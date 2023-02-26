<div id="carouselShare-of-voiceControls" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="d-block w-100">
                <div class="row">
                    <div class="col">
                        <h3>Share Of Voice in All Media</h3>
                    </div>
                    <div class="col text-end">
                        Download
                    </div>

                </div>

                <div class="row">
                    <div class="col-12 col-md-8">
                        <article>
                            Share of voice in comparison to UNICEF's peers/comparative organizations in all media during a specific period of time (all media refers to TV, Radio, Print and web/online media)
                        </article>
                    </div>
                </div>


                <!-- charts -->
                <div class="row">
                    <div class="col-12 col-md-8">
                        <!-- <div id="chart"></div> -->
                        <!-- width: 100%; max-width:  -->
                        <div style="width: 100%; max-width: 600px;" class="mt-4">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <p>Total Analyzed Articles
                            <br>
                            with reflections
                        </p>

                        <p>
                            Number of Articles With UNICEF
                            <br>
                            Mention
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <div class="d-block w-100">
                hello 2
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-block w-100">
                hello 3
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselShare-of-voiceControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <!-- <span class="sr-only">Previous</span> -->
    </a>
    <a class="carousel-control-next" href="#carouselShare-of-voiceControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <!-- <span class="sr-only">Next</span> -->
    </a>
</div>

<script>
    Chart.register(ChartDataLabels);
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['UNICEF', 'Save the Children', 'UNOCHA', 'World Food Programme', 'WHO', 'UNAMA', 'RED CRESCENT', 'UNFPA', 'UNCHR', 'UN WOMEN', 'WAR CHILD AFGHANISTAN'],
            datasets: [{
                data: [41, 20, 9, 8, 8, 4, 3, 3, 2, 2, 1],
                borderWidth: 1,
                datalabels: {
                    color: '#000',
                    anchor: 'end',
                    align: 'end',
                    offset: -25,
                    font: {
                        size: 8,
                        weight: 'bold',
                    },
                    formatter: function(value, context) {
                        return `${value}%`;
                    }
                },
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
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
                        padding: 10,
                        color: '#000',
                        font: {
                            size: 12
                        },
                    },

                    // hide on mobile
                    onHover: function(e) {
                        e.target.style.cursor = 'pointer';
                    },
                    
                },
                
            },
        },
    });

    window.addEventListener('beforeprint', () => {
        myChart.resize(600, 600);
    });
    window.addEventListener('afterprint', () => {
        myChart.resize();
    });
</script>


<script>
    // var options = {
    //     series: [41, 20, 9, 8, 8, 4, 3, 3, 2, 2, 1],
    //     labels: ['UNICEF', 'Save the Children', 'UNOCHA', 'World Food Programme', 'WHO', 'UNAMA', 'RED CRESCENT', 'UNFPA', 'UNCHR', 'UN WOMEN', 'WAR CHILD AFGHANISTAN'],
    //     colors: ['#4397F7', '#4CA730', '#AAAA84', '#333393', '#000000', '#FFFF54', '#EA3397', '#EA3323', '#F3AE3D', '#937524', '#2D4374'],
    //     chart: {
    //         type: 'pie',
    //     },
    //     legend: {
    //         position: 'bottom',
    //         offsetY: 50,
    //     },
    //     // responsive: [{
    //     //     breakpoint: 480,
    //     //     options: {
    //     //         chart: {
    //     //             width: 400
    //     //         },
    //     //         legend: {
    //     //             position: 'left'
    //     //         }
    //     //     }
    //     // }]
    // };

    // var chart = new ApexCharts(document.querySelector("#chart"), options);
    // chart.render();
</script>