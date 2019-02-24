@extends('templates.master')

@section('content')

<div class="row">
        <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#ranking" aria-expanded="false" aria-controls="collapseExample">
            Keterangan
        </button>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="collapse" id="ranking">
                <div class="card card-body">
                    <h5>Ranking : Hasil Sorting Semua Bobot Evaluasi dari Tertinggi ke Terendah</h>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card col-sm-6">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                </div>
                <h4 class="card-title">Ranking</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Daerah</th>
                            <th class="text-center">Bobot Evaluasi</th>
                            {{-- <th class="text-right">Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;

                        @endphp
                        @foreach($result as $x => $x_value)
                            <tr>
                                <td class="text-center">{{$no++}}</td>
                                <td class="text-center">{{$x}}</td>
                                <td class="text-center">{{$x_value}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
