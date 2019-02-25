@extends('templates.master')

@section('content')

    <div class="row">
        <a href="{{route('tambaheditpenggunaanlahan.read')}}"><button class="btn btn-rose" type="button">
            Tambah & Edit Data
        </button></a>
    </div>

    <div class="row">
        <div class="col-sm-8 card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                </div>
                <h4 class="card-title">Data Penggunaan Lahan</h4>
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
                                <td class="text-center">{{$dk_view->nilai}}</td>
                                <td class="text-center">{{MunculinNilaiKlasifikasi(2, $dk_view->id_kecamatan)}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
