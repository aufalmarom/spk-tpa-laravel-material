@extends('templates.master')

@section('content')

    <div class="row">
        <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#parameternilai" aria-expanded="false" aria-controls="collapseExample">
            Formula
        </button>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="collapse" id="parameternilai">
                <div class="card card-body">
                    <h4>Daerah = Data Alternatif (A)</h4>
                    <h4>Kriteria = Parameter (P)</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">perm_identity</i>

                </div>
                <h4 class="card-title">Parameter dan Nilai</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Daerah</th>
                            @foreach ($datas1 as $item)
                                <th class="text-center">{{$item->parameter}}</th>
                            @endforeach

                            {{-- <th class="text-right">Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($datas as $pd_view)
                            <tr>
                                <td class="text-center">{{$no++}}</td>
                                <td>{{$pd_view->daerah}}</td>
                                @for ($i = 0; $i < count($datas1); $i++)
                                    <td class="text-center">{{MunculinNilaiKlasifikasi($datas1[$i]['id'], $pd_view->id)}}</td>
                                @endfor
                            </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
