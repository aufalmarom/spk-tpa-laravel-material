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
                    <iframe width="100%" height="710" frameborder="0" src="https://aufalmarom.carto.com/builder/58bedc26-6b98-4113-a009-3d1d09501c65/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
