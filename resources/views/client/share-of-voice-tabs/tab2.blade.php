<div class="d-block w-100">
    <h3>Share of Voice by Media</h3>
    <p>
    Share of Voice in Comparison to UNICEF’s Peers/Comparative Organizations by Media Type During a Specific Period of Time (Broadcast Media refers to TV and radio)
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
        var pieChart1 = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: ['A', 'B', 'C', 'D', 'E'],
                datasets: [{
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }],

            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                }
            }
        });

        // Second pie chart
        var ctx2 = document.getElementById('pieChart2').getContext('2d');
        var pieChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['A', 'B', 'C', 'D', 'E'],
                datasets: [{
                    data: [7, 13, 4, 8, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                }
            }
        });

        // Third pie chart
        var ctx3 = document.getElementById('pieChart3').getContext('2d');
        var pieChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: ['A', 'B', 'C', 'D', 'E'],
                datasets: [{
                    data: [9, 17, 5, 6, 4],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                }
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