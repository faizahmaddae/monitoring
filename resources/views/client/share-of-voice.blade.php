<div id="carouselShare-of-voiceControls" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- tab1 -->
            @include('client.share-of-voice-tabs.tab1')
        </div>
        <div class="carousel-item">
            <!-- tab2 -->
            @include('client.share-of-voice-tabs.tab2')
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
    $(document).ready(function() {
        $('#carouselShare-of-voiceControls').carousel(1);
    });
    // bootstrap carousel init index 1
    // $('#carouselShare-of-voiceControls').carousel(1);
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