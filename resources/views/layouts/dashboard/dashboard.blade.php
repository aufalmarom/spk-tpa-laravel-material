@extends('templates.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">assessment</i>

                    </div>
                    <h4 class="card-title">Result Ranking of SMART Method</h4>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="table-responsive table-sales">
                                <table class="table">
                                    <tbody>
                                        <tr class="text-center">
                                            <td>1</td>
                                            <td>abang</td>
                                            <td>Semarang</td>
                                            <td>90</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>2</td>
                                            <td>ijo</td>
                                            <td>Lasem</td>
                                            <td>80</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>3</td>
                                            <td>biru</td>
                                            <td>Leran</td>
                                            <td>70</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>4</td>
                                            <td>kuneng</td>
                                            <td>Gondang</td>
                                            <td>60</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>5</td>
                                            <td>abang</td>
                                            <td>Ngesrep</td>
                                            <td>50</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>6</td>
                                            <td>ijo</td>
                                            <td>Lasem</td>
                                            <td>40</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>7</td>
                                            <td>biru</td>
                                            <td>Leran</td>
                                            <td>35</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-8 ml-auto mr-auto">
                            <div id="worldMap" >
                                <div class="jvectormap-container" style="background-color: transparent"></div>
                                <iframe width="100%" height="400" frameborder="0" src="https://aufalmarom.carto.com/builder/696bc91d-9c17-4868-b22b-84d4007cbf23/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card card-chart" data-count="15">
                <div class="card-header card-header-rose" data-header-animation="true">
                    <div class="ct-chart" id="dailySalesChart">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids">
                            <line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="72.66517857142857" x2="72.66517857142857" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="105.33035714285714" x2="105.33035714285714" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="137.99553571428572" x2="137.99553571428572" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="170.66071428571428" x2="170.66071428571428" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="203.32589285714283" x2="203.32589285714283" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line x1="235.99107142857142" x2="235.99107142857142" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                            <line y1="120" y2="120" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line>
                            <line y1="96" y2="96" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line>
                            <line y1="72" y2="72" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line>
                            <line y1="48" y2="48" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line>
                            <line y1="24" y2="24" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line>
                            <line y1="0" y2="0" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line></g>
                            <g><g class="ct-series ct-series-a">
                            <path d="M 40 91.2 C 72.665 79.2 72.665 79.2 72.665 79.2 C 105.33 103.2 105.33 103.2 105.33 103.2 C 137.996 79.2 137.996 79.2 137.996 79.2 C 170.661 64.8 170.661 64.8 170.661 64.8 C 203.326 76.8 203.326 76.8 203.326 76.8 C 235.991 28.8 235.991 28.8 235.991 28.8" class="ct-line"></path>
                            <line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line>
                            <line x1="72.66517857142857" y1="79.2" x2="72.67517857142857" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line>
                            <line x1="105.33035714285714" y1="103.2" x2="105.34035714285714" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line>
                            <line x1="137.99553571428572" y1="79.2" x2="138.0055357142857" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line>
                            <line x1="170.66071428571428" y1="64.8" x2="170.67071428571427" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line>
                            <line x1="203.32589285714283" y1="76.8" x2="203.33589285714282" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line>
                            <line x1="235.99107142857142" y1="28.799999999999997" x2="236.0010714285714" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line></g></g>
                            <g class="ct-labels">
                                <foreignObject style="overflow: visible;" x="40" y="125" width="32.66517857142857" height="20">
                                <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">M</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="72.66517857142857" y="125" width="32.66517857142857" height="20">
                                <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">T</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="105.33035714285714" y="125" width="32.66517857142857" height="20">
                                <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">W</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="137.99553571428572" y="125" width="32.66517857142857" height="20">
                                <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">T</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="170.66071428571428" y="125" width="32.665178571428555" height="20">
                                <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">F</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="203.32589285714283" y="125" width="32.665178571428584" height="20">
                                <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">S</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="235.99107142857142" y="125" width="32.665178571428584" height="20">
                                <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">S</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30">
                                <span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30">
                                <span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30">
                                <span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30">
                                <span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30">
                                <span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-actions">
                        <button type="button" class="btn btn-rose btn-link fix-broken-card">
                            <i class="material-icons">build</i>
                            "Fix Header!"
                        </button>
                        <button type="button" class="btn btn-rose btn-info btn-link" rel="tooltip" data-placement="bottom" title data-original-title="Refresh">
                            <i class="material-icons">refresh</i>
                            <div class="ripple-container"></div>
                        </button>
                        <button type="button" class="btn btn-rose btn-info btn-link" rel="tooltip" data-placement="bottom" title data-original-title="Change Data">
                            <i class="material-icons">edit</i>
                        </button>
                    </div>
                    <h4 class="card-title">Data</h4>
                    <p class="card-category"></p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">access_time</i>
                        "updated long time ago"
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
