@extends('templates.master')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{$message}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
    @endif

    <div class="row">
        @if(Auth::user()->role != "client")
        <a href="{{route('tambaheditdataparameter.read', $parameter->id)}}"><button class="btn btn-rose" type="button">
            Tambah & Edit Data
        </button></a>
        @endif
    </div>


    <div class="row">
        <div class="col-sm-8 card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">landscape</i>

                </div>
                <h4 class="card-title">Data {{$parameter->parameter}}</h4>

            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Daerah</th>
                            <th class="text-center">Nilai Parameter</th>
                            <th class="text-center">Nilai Klasifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($datas as $dk_view)
                            <tr>
                                <td class="text-center">{{$no++}}</td>
                                <td>{{$dk_view->kecamatan->daerah}}</td>
                                <td class="text-center">{{$dk_view->nilai_parameter}}</td>
                                <td class="text-center">{{$dk_view->nilai_klasifikasi}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
