@extends('templates.master')

@section('content')

    <div class="row">
        <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#bobotrelatif" aria-expanded="false" aria-controls="collapseExample">
            Formula
        </button>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="collapse" id="bobotrelatif">
                <div class="card card-body">
                    <h3><i>W<sub>j</sub></i> = <i>w<sub>j</sub></i>  /  &Sigma;<i>w<sub>j</sub></i> </h3>
                    <h4>Keterangan :</h4>
                    <h5>- <i>W<sub>j</sub></i> : Bobot Relatif</h5>
                    <h5>- <i>w<sub>j</sub></i> : Nilai Bobot Parameter</h5>
                    <h5>- &Sigma;<i>w<sub>j</sub></i> : Nilai Bobot Parameter</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">subject</i>
                </div>
                <h4 class="card-title">Bobot Relatif</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Parameter</th>
                            <th class="text-center">Bobot Pembagi</th>
                            <th class="text-center">Bobot Relatif</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($db as $br_view)
                            <tr>
                                <td class="text-center">{{$no++}}</td>
                                <td>{{$br_view->parameter}}</td>
                                <td class="text-center">{{$br_view->bobot}}/{{$datas_sum}}</td>
                                <td class="text-center">{{$br_view->bobot_relatif}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
