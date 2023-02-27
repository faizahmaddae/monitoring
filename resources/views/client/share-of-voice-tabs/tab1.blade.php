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
                <canvas id="myChart-tab1"></canvas>
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

<script>
    var ctxTab1 = document.getElementById('myChart-tab1').getContext('2d');
    var myChart = new Chart(ctxTab1, {
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