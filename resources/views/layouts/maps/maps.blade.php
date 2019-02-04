@extends('templates.master')

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header card-header-text card-header-rose">
                    <div class="card-text">
                        <h4 class="card-title">Carto Map</h4>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <iframe width="100%" height="520" frameborder="0" src="https://aufalmarom.carto.com/builder/696bc91d-9c17-4868-b22b-84d4007cbf23/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
