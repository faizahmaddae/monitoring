@extends('layouts.clientApp')

@section('content')


<div class="d-flex align-items-start mytab" id="mytab1">
    <div class="nav flex-column nav-pills col-4 col-md-3 shadow-element" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="daliy-reports-tab" data-bs-toggle="pill" data-bs-target="#daliy-reports" type="button" role="tab" aria-controls="daliy-reports" aria-selected="true">
            <span class="ps-md-5">Daliy Reports</span>
        </button>
        <button class="nav-link" id="share-of-voice-tab" data-bs-toggle="pill" data-bs-target="#share-of-voice" type="button" role="tab" aria-controls="share-of-voice" aria-selected="false">
            <span class="ps-md-5">Share of Voice</span>
        </button>
        <button class="nav-link" id="mentions-tab" data-bs-toggle="pill" data-bs-target="#mentions" type="button" role="tab" aria-controls="mentions" aria-selected="false">
            <span class="ps-md-5">Mentions</span>
        </button>
        <button class="nav-link" id="key-message-analysis-tab" data-bs-toggle="pill" data-bs-target="#key-message-analysis" type="button" role="tab" aria-controls="key-message-analysis" aria-selected="false">
            <span class="ps-md-5">Key Message Analysis</span>
        </button>
        <button class="nav-link" id="polio-tab" data-bs-toggle="pill" data-bs-target="#polio" type="button" role="tab" aria-controls="polio" aria-selected="false">
            <span class="ps-md-5">Polio</span>
        </button>
    </div>
    <div class="tab-content bg-white p-4 w-100" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="daliy-reports" role="tabpanel" aria-labelledby="daliy-reports-tab">
            <!-- include daliy-reports -->
            @include('client.daliy-reports')
        </div>
        <div class="tab-pane fade" id="share-of-voice" role="tabpanel" aria-labelledby="share-of-voice-tab">
            <!-- include share-of-voice -->
            @include('client.share-of-voice')
        </div>
        <div class="tab-pane fade" id="mentions" role="tabpanel" aria-labelledby="mentions-tab">Mentions</div>
        <div class="tab-pane fade" id="key-message-analysis" role="tabpanel" aria-labelledby="key-message-analysis-tab">Key Message Analysis</div>
        <div class="tab-pane fade" id="polio" role="tabpanel" aria-labelledby="polio-tab">polio</div>
    </div>
</div>


<script>
    $(function() {
        var hash = window.location.hash;
        hash && $('button.nav-link').removeClass('active');
        hash && $('div.tab-pane').removeClass('show active');
        hash && $(hash).addClass('show active');
        hash && $(hash + '-tab').addClass('active');
    });

    // onclick tab change broswer url
    $(document).ready(function() {
        $('button.nav-link').click(function() {
            var tab = $(this).attr('id');
            var tabName = tab.replace('-tab', '');
            var url = window.location.href;
            var hash = window.location.hash;
            if (hash) {
                url = url.replace(hash, '#' + tabName);
            } else {
                url = url + '#' + tabName;
            }
            window.history.pushState("", "", url);
        });
    });

    // Chart.register(ChartDataLabels);
    // const ctx = document.getElementById('myCharts');

    // new Chart(ctx, {
    //     responsive: true,
    //     maintainAspectRatio: false,
    //     aspectRatio: 4,
    //     type: 'doughnut',
    //     data: {
    //         labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'faiz'],
    //         datasets: [{
    //             label: '# of Votes',
    //             data: [12, 19, 3, 5, 2, 3, 20],
    //             borderWidth: 1,
    //             borderWidth: 1,
    //             datalabels: {
    //                 color: '#000',
    //                 anchor: 'end',
    //                 align: 'end',
    //                 offset: 10,
    //                 font: {
    //                     size: 12,
    //                     weight: 'bold',
    //                 },
    //                 formatter: function(value, context) {
    //                     return `${value}%`;
    //                 }
    //             },

    //         }],
    //     },

    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true,
    //                 display: false,
    //                 ticks: {
    //                     display: false
    //                 },
    //                 grid: {
    //                     display: false
    //                 }
    //             },
    //             x: {
    //                 beginAtZero: true,
    //                 display: false,
    //                 ticks: {
    //                     display: false
    //                 },
    //                 grid: {
    //                     display: false
    //                 }
    //             }
    //         },
    //         plugins: {
    //             legend: {
    //                 display: true,
    //                 position: 'right',
    //                 align: 'center',
    //                 labels: {
    //                     usePointStyle: true,
    //                     // rectRounded, rectRot, triangle
    //                     pointBackgroundColor: "rgba(0,191,255)",
    //                     pointStyle: 'rectRounded',
    //                     padding: 30,
    //                     color: '#000',
    //                     font: {
    //                         size: 12
    //                     },
    //                 },
    //             },
    //         },
    //     }
    // });
</script>

<!-- /.content -->
@endsection