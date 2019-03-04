@extends('templates.master')

@section('content')

    <div class="row">
        <button class="btn btn-rose" type="button" data-toggle="collapse" data-target="#parameternilaibobot" aria-expanded="false" aria-controls="collapseExample">
            Formula
        </button>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="collapse" id="parameternilaibobot">
                <div class="card card-body">
                    <h3><i>A<sub>i</sub></i> = <i>A</i> * <i>w<sub>ij</sub></i></h3>
                    <h4>Keterangan :</h4>
                    <h5>- <i>A<sub>i</sub></i> : Hasil Perkalian Nilai Data Alternatif dengan Bobot Parameternya</h5>
                    <h5>- <i>A</i> : Nilai Data Alternatif</h5>
                    <h5>- <i>w<sub>j</sub></i> : Nilai Bobot Parameter</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">subject</i>

                </div>
                <h4 class="card-title">Parameter & Nilai Bobot</h4>
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
                                <td class="text-center">{{MunculinParameterNilaiBobot($datas1[$i]['id'], $pd_view->id)}}</td>
                            @endfor
                        </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
